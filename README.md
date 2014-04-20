Phalcon application structured like as Symfony/Yii
-----

(Bundles|Widgets|Assets|Etc)

### You need install

Composer
https://github.com/composer/composer

Phalcon
https://github.com/phalcon/cphalcon


### Load vendor modules:

>composer install


### Create db 'phemo'

(see connection `app/config/main.local_dev.php')

``` sql
CREATE DATABASE phemo;
USE phemo;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `product_category_id_idx` (`category_id`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

```

### Open page

http://localhost/phemo/demo/product/index/