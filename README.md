# LaraWoo!
[![Total Downloads](https://poser.pugx.org/ollywarren/larawoo/downloads)](https://packagist.org/packages/ollywarren/larawoo)
[![Latest Stable Version](https://poser.pugx.org/ollywarren/larawoo/v/stable)](https://packagist.org/packages/ollywarren/larawoo)
[![License](https://poser.pugx.org/ollywarren/larawoo/license)](https://packagist.org/packages/ollywarren/larawoo)

A Simple and Elegant Wrapper fro the Automattic WooCommerce PHP Library.

### Introduction
This project started after the need to integrate WooCommerce with a Clients backoffice system was identified. The idea was to create a small Laravel/Lumen service to run externally to WooCOmmerce that took the data from the back office system and fed it into WooCommerce across the REST API Endpoints. On the flip side we needed to also pass data back the other way. We felt that having WordPress handle this internally could be more complex than just using a Laravel API Data Service to handle this functionality.


### Installation Laravel 5.5 +
Just use composer to drop this package in and let Auto Discover do its wonderful thing!

```bash
composer require ollywarren/larawoo
```

Publish the vendor configuration:

``` php artisan vendor:publish``` (Select the relevant package from the list)

Set the environment variables in your Apps .env file:

```
LARAWOO_URL="<YOUR WOOCOMMERCE INSTALL URL>"
LARAWOO_CONSUMER_KEY="<YOUR CONSUMER KEY>"
LARAWOO_CONSUMER_TOKEN"<YOUR CONSUMER TOKEN>"
```

Review the other avilable options in the documentation linked below and in the included larawoo configuration file.

## Installation Laravel 5.4

Use composer to add it to your project dependencies:

``` composer require ollywarren/larawoo ```


Then inside your ```config/app.php```


Add the package service provider to the providers array:

``` Ollywarren\Larawoo\LaraWooServiceProvider::class, ```

Add the facade to the alias array:

```php
[
    'Larawoo' => 'Ollywarren\Larawoo\Facades\Larawoo::class 
]
 ```

Finally for good measure dump the composer autoloader to make sure we've pulled in the helper method:

``` composer dump-autoloader ```

Publish the vendor configuration:

``` php artisan vendor:publish```

Set the environment variables in your Apps .env file:

```
LARAWOO_URL="<YOUR WOOCOMMERCE INSTALL URL>"
LARAWOO_CONSUMER_KEY="<YOUR CONSUMER KEY>"
LARAWOO_CONSUMER_TOKEN"<YOUR CONSUMER TOKEN>"
```

### Usage Instructions

The included helper method makes accessing the underlying methods as easy as:

```php 
$results = larawoo()->get('customers');
// ['customers' => [[ 'id' => 8, 'created_at' => '2015-05-06T17:43:51Z', 'email' => ...
```
Or With the Facade if youd prefer

```php 
$results = Larawoo::get('customers');
// ['customers' => [[ 'id' => 8, 'created_at' => '2015-05-06T17:43:51Z', 'email' => ...
```

For a full breakdown of the available methods please see Automattic's Package Page for the library: 

[WooCommerce API Library Packagist Package](https://packagist.org/packages/automattic/woocommerce)

[WooCommerce API Documentation](http://woocommerce.github.io/woocommerce-rest-api-docs/?php#introduction)



