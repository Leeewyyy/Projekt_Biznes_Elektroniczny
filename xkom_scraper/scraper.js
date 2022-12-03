const request = require('request-promise-native');
const Export = require('./export');
const ImageDownload = require('./image_download');

module.exports = class Scraper {
  groupId = null;
  categoryId = null;
  isValidUrl = false;
  timeoutMs = 5000;

  constructor (pageUrl) {
    this.isValidUrl = this.parsePageUrl(pageUrl);
  }

  parsePageUrl (pageUrl) {
    const regex = /x-kom.pl\/g-(\d+)\/c\/(\d+)\S+/;
    const [ _, groupId, categoryId ] = pageUrl.match(regex) || [];

    this.groupId = groupId;
    this.categoryId = categoryId;

    return groupId && categoryId;
  }

  isValidPageUrl () {
    return this.isValidUrl;
  }

  async sleep (ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
  }

  async fetchProductsPage (pageNumber, groupId, categoryId) {
    const defaultHeaders = {
      'time-zone': 'UTC',
      'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0',
      'x-api-key': 'jfsTOgOL23CN2G8Y',
    };

    const query = {
      'displayProfile': 'Website',
      'criteria.useAutoFuzziness': false,
      'childCategorySort': 'priority desc',
      'criteria.groupIds': groupId,
      'criteria.categoryIds': categoryId,
      'pagination.currentPage': pageNumber,
      'pagination.pageSize': 100,
      'sort': 'Popularity desc',
    };

    const pageData = await request('https://mobileapi.x-kom.pl/api/v1/xkom/products', {
      method: 'GET',
      headers: defaultHeaders,
      qs: query,
      json: true,
    });

    const {
      Items: products,
      TotalPages: totalPages,
      Page: currentPage,
    } = pageData;

    return {
      products,
      totalPages,
      currentPage,
    };
  }

  parseProducts (products) {
    return products.map((product) => {
      const {
        Id: id,
        Name: name,
        Price: price,
        Producer: producer,
        MainPhoto: photo,
        Category: category,
        FeatureSummary: featureSummary,
      } = product;

      const {
        Name: producerName,
      } = producer;

      const {
        Url: photoUrl
      } = photo || {};

      const {
        Id: categoryId,
        NamePlural: categoryName,
      } = category;

      const description = (featureSummary || []).join('<br/>');
      
      const photoName = photoUrl?.split('/').pop();
      const photoImportPath = photoName && `http://127.0.0.1/product_images/${photoName}`;

      return {
        id,
        categoryId,
        producerName,
        categoryName,
        name,
        description,
        price,
        photoUrl,
        photoImportPath,
      };
    });
  }

  async run () {
    console.log(`Rozpoczynam pobieranie... (grupa: ${this.groupId}, kategoria: ${this.categoryId})`);
    
    let pageCur = 1;
    let pageMax = null;
    let productList = [];

    do {
      const {
        products,
        totalPages,
      } = await this.fetchProductsPage(pageCur, this.groupId, this.categoryId);

      console.log(`Pobrałem stronę produktów numer ${pageCur} z ${totalPages}...`);
      productList.push(...this.parseProducts(products));
      pageMax = totalPages;
      
      // No more pages
      if (pageMax === pageCur) break;

      // Wait before fetching next page
      await this.sleep(this.timeoutMs);
    } while (pageMax && ++pageCur <= pageMax);
    
    console.log(`Pobrano ${productList.length} produktów z linku.`);

    if (!productList.length) return;
    
    console.log('Rozpoczynam pobieranie obrazków produktów.');
    const photoUrls = productList.map(product => product.photoUrl).filter(photoUrl => !!photoUrl);
    const imageDownload = new ImageDownload();
    await imageDownload.downloadImages(photoUrls);

    console.log('Eksportuję pobrane produkty do CSV oraz JSON!');
    const exportService = new Export(this.groupId, this.categoryId);
    await exportService.export(productList);

    console.log('Program zakończony.');
  }
};