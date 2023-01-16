const Scraper = require('./scraper');
const Fs = require('fs');

const [ executable, path, pageUrl ] = process.argv;

if (!pageUrl) {
  console.error('Podaj link do kategorii x-kom jako pierwszy argument programu!');
  return;
}

// Make sure directories exists
const dir = `${__dirname}/export/product_images/`;

if (!Fs.existsSync(dir)) {
  Fs.mkdirSync(dir, { recursive: true });
}

const scraper = new Scraper(pageUrl);

if (!scraper.isValidPageUrl()) {
  console.error('Podano nieprawidłowy link do kategorii x-kom!');
  return;
}

scraper.run();