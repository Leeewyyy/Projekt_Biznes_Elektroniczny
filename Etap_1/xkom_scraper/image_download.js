const request = require('request-promise-native');
const Fs = require('fs');

module.exports = class ImageDownload {
  getFilepath (fileName) {
    return `${__dirname}/export/product_images/${fileName}`;
  }

  async downloadAndSaveImage (url) {
    const fileName = url.split('/').pop();
    const savePath = this.getFilepath(fileName);

    const headers = {
      'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0',
    };

    const content = await request(url, {
      method: 'GET',
      headers,
      encoding: 'binary',
    });

    Fs.writeFileSync(savePath, content, 'binary', function (error) {
      console.error(`Failed to save image (${savePath}), error: ${error}!`);
    });
  }

  async downloadImages (urls) {
    for (const url of urls) {
      await this.downloadAndSaveImage(url);
    }
  }
};