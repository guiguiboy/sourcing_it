sourcing_it
===========

Sourcing IT tool

How to install
==============

 * Clone the project
 
 * configure virtual host (apache2 example) : 
 
        <VirtualHost *:80>
        ServerName sourcing-it.local
        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/sourcing_it/Symfony/web/
        <Directory /var/www/sourcing_it/Symfony/web/>
            Options Indexes FollowSymLinks MultiViews
            AllowOverride None
            Order allow,deny
            allow from all
            <IfModule mod_rewrite.c>
                RewriteEngine On
                RewriteCond %{REQUEST_FILENAME} !-f
                RewriteRule ^(.*)$ /app.php [QSA,L]
            </IfModule>
        </Directory>
        </VirtualHost>


 * enable vhost
 
        sudo a2ensite sourcing_it
        sudo service apache2 restart
 
 * add sourcing_it.local in your host file
  
 * set permissions on log + cache directory 
 
 * install dependies via composer
        cd Symfony
        curl -s https://getcomposer.org/installer | php
        php composer.phar install
  
 * configure database information in app/parameters.yml
  
 * create database and schema
        php app/console doctrine:database:create
        php app/console doctrine:schema:create
  
 * access to the front dev url : http://sourcing-it.local/app_dev.php
  