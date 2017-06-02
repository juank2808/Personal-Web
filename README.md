## Laravel instalation with PHP7


sudo add-apt-repository ppa:ondrej/php -y 
sudo apt-get update -y

sudo apt-get install php7.0-curl php7.0-cli php7.0-dev php7.0-gd php7.0-intl php7.0-mcrypt php7.0-json php7.0-mysql php7.0-opcache php7.0-bcmath php7.0-mbstring php7.0-soap php7.0-xml php7.0-zip -y

sudo mv /etc/apache2/envvars /etc/apache2/envvars.bak 
sudo apt-get remove libapache2-mod-php5 -y 
sudo apt-get install libapache2-mod-php7.0 -y 
sudo cp /etc/apache2/envvars.bak /etc/apache2/envvars

sudo nano /home/ubuntu/.bashrc 
export PATH=$PATH:/home/ubuntu/.composer/vendor/bin

sudo nano /etc/apache2/sites-available/001-cloud9.conf 
cambios: DocumentRoot /home/ubuntu/workspace/public



composer global require "laravel/installer"

composer create-project --prefer-dist laravel/laravel [your project]

cuidado al pasarlo a la raiz, el documento .env tambien tiene que estar

modificar /config/database.php

php artisan make:model Persona

modificar el fichero .env

php artisan make:migration insert_personas_migration

al finalizar siempre: php artisan migrate

cada uno haga su propia migration y inserte su nombre en la tabla personas

php artisan make:controller PersonasController --resource

welcome templatea aldatu.