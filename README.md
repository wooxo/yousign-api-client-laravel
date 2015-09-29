# YouSignApiClientLaravel

[![Build Status](https://travis-ci.org/wooxo/yousign-api-client-laravel.svg?branch=master)](https://travis-ci.org/wooxo/yousign-api-client-laravel)
[![Latest Stable Version](https://poser.pugx.org/wooxo/yousign-api-client-laravel/v/stable.png)](https://packagist.org/packages/wooxo/yousign-api-client-laravel) [![Total Downloads](https://poser.pugx.org/wooxo/yousign-api-client-laravel/downloads.png)](https://packagist.org/packages/wooxo/ovh-swift-laravel)

It's a library for Laravel 4.2.

Library to use YouSign API with Laravel
Based on PHP Client : https://github.com/Yousign/yousign-api-client-php

Installation
------------

Install using composer

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