const Fs = require('fs');
const { parse: Json2CsvParse } = require('json2csv');

module.exports = class Export {
  groupId = null;
  categoryId = null;
  
  constructor (
    groupId,
    categoryId,
  ) { 
    this.groupId = groupId;
    this.categoryId = categoryId;
  }

  getFilepath (ext) {
    const timeString = new Date().toLocaleTimeString('pl').replace(/\:/g, '_');
    const fileName = `xkom-${this.groupId}-${this.categoryId}-${timeString}`;
    return `${__dirname}/export/${fileName}.${ext}`;
  }

  getCsv (parsedProducts) {
    const fields = [
      { label: 'Nazwa', value: 'name' },
      { label: 'Marka', value: 'producerName' },
      { label: 'Kategorie (x,y,z...)', value: 'categoryName' },
      { label: 'Cena zawiera podatek. (brutto)', value: 'price' },
      { label: 'Podsumowanie', value: 'description' },
      { label: 'Opis', value: 'description' },
      { label: 'Adresy URL zdjęcia (x,y,z...)', value: 'photoImportPath' },
      // { label: 'Adresy URL zdjęcia (x,y,z...)', value: 'photoUrl' },
      { label: 'Ilość', value: 'quantity', default: 100 },
    ];

    const options = {
      fields,
      delimiter: ';',
    };

    return Json2CsvParse(parsedProducts, options);
  }

  getJson (parsedProducts) {
    // Do any transformation here if needed
    return JSON.stringify(parsedProducts, null, 2);
  }

  async export (parsedProducts) {
    const options = {
      encoding: 'utf8',
    };

    // Export CSV
    const csvPath = this.getFilepath('csv');
    const csvContent = this.getCsv(parsedProducts);

    Fs.writeFileSync(csvPath, csvContent, options);

    // Export JSON
    const jsonPath = this.getFilepath('json');
    const jsonContent = this.getJson(parsedProducts);

    Fs.writeFileSync(jsonPath, jsonContent, options);
  }
};