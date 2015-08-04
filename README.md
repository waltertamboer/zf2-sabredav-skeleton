# zf2-sabredav-skeleton

An example application that shows how to setup SabreDav using Zend Framework 2.

# Installation with Doctrine ORM

* Clone this repository to your preferred location.
* Run `composer install` to download the needed PHP dependencies.
* The database tables needed to be created manually. Take a look at `vendor/sabre/dav/examples/sql/`
* Copy `config/autoload/doctrine-orm.global.php` to `config/autoload/doctrine-orm.local.php` and update the configuration to your needs.
* Enable `'sabredav.service.pdo' => 'Application\Service\SabreDavDoctrineFactory',` in `config/autoload/sabredav.config.global.php`

# Installation with Zend DB

* Clone this repository to your preferred location.
* Run `composer install` to download the needed PHP dependencies.
* The database tables needed to be created manually. Take a look at `vendor/sabre/dav/examples/sql/`
* Copy `config/autoload/zend-db.global.php` to `config/autoload/zend-db.local.php` and update the configuration to your needs.
* Database tables needed to be created manually. Take a look at `vendor/sabre/dav/examples/sql/`
* Enable `'sabredav.service.pdo' => 'Application\Service\SabreDavZendDbFactory',` in `config/autoload/sabredav.config.global.php`

# Installation with custom PDO library...

* Clone this repository to your preferred location.
* Run `composer install` to download the needed PHP dependencies.
* The database tables needed to be created manually. Take a look at `vendor/sabre/dav/examples/sql/`
* Create a factory that returns the PDO connection. For an example, take a look at `module/Application/src/Application/Service/`
* Add the factory in `config/autoload/sabredav.config.global.php` to the service manager.
