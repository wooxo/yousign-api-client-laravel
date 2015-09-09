# YouSignApiClientLaravel

[![Build Status](https://travis-ci.org/wooxo/YouSignApiClientLaravel.svg?branch=master)](https://travis-ci.org/wooxo/YouSignApiClientLaravel)
[![Latest Stable Version](https://poser.pugx.org/wooxo/yousign-api-client-laravel/v/stable.png)](https://packagist.org/packages/wooxo/yousign-api-client-laravel) [![Total Downloads](https://poser.pugx.org/wooxo/yousign-api-client-laravel/downloads.png)](https://packagist.org/packages/wooxo/ovh-swift-laravel)

It's a library for Laravel 4.2.

Library to use YouSign API with Laravel
Based on PHP Client : https://github.com/Yousign/yousign-api-client-php

Installation
------------

Install using composer
First update your composer.json
```bash
{
    "repositories":  [
        {
            "type": "package",
            "package": {
                "name": "nusphere/nusoap",
                "version": "0.9.5",
                "dist": {
                    "url": "http://downloads.sourceforge.net/project/nusoap/nusoap/0.9.5/nusoap-0.9.5.zip",
                    "type": "zip"
                },
                "autoload": {
                    "classmap": ["lib/"]
                }
            }
        }
    ],
}
```
Now require the lib
```bash
composer require wooxo/yousign-api-client-laravel "~0.1"
```

Publish config and complete informations (contact YouSign to get Credentials)
```bash
php artisan config:publish wooxo/yousign-api-client-laravel
```

Add provider in config.app
```bash
'providers' = array(
    [...],
    'Wooxo\YouSignApiClientLaravel\YouSignApiClientLaravelServiceProvider'
);
```

Usage
------------

Init connection
```bash
$client = new YouSignApiClientLaravel();
```

After please report to the documentation of https://github.com/Yousign/yousign-api-client-php 