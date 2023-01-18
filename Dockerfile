FROM prestashop/prestashop:latest

# Copy existing Prestashop installation files
COPY ./prestashop /var/www/html

# Fix permissions for Prestashop catalogs
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

WORKDIR /var/www/html

# Enable HTTP/HTTPS
EXPOSE 80
EXPOSE 443