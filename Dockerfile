FROM prestashop/prestashop:latest

# Copy existing Prestashop installation files
COPY ./prestashop /var/www/html

# Copy Apache config and SSL certificates
COPY ./localhost.conf /etc/apache2/sites-available/localhost.conf
COPY ./certificate/localhost.crt /etc/ssl/certs/localhost.crt
COPY ./certificate/localhost.key /etc/ssl/private/localhost.key

# Enable Apache modules and localhost site
RUN a2enmod env
RUN a2enmod headers
RUN a2enmod rewrite
RUN a2enmod ssl
RUN a2ensite localhost

# Fix permissions for Prestashop catalogs
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Remove Prestashop install folder
RUN rm -rf /var/www/html/install

WORKDIR /var/www/html

# Enable HTTP/HTTPS
EXPOSE 80
EXPOSE 443