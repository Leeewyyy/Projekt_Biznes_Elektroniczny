FROM prestashop/prestashop:latest

# Copy existing product images, themes and modules from existing installation
COPY ./prestashop/img/      /var/www/html/img/
COPY ./prestashop/themes/   /var/www/html/themes/
COPY ./prestashop/modules/  /var/www/html/modules/

# Fix permissions for Prestashop catalogs
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

WORKDIR /var/www/html

# Enable HTTP/HTTPS
EXPOSE 80
EXPOSE 443