<h1 align="center"> Gearman </h1>

<p align="center"> ⌛  Gearaman Provider in Laravel </p>

This is to make your Gearman easy to use in the laravel framework

## Requirement

 1. PHP >= 7.3
 2. illuminate/queue => 7.* | 8.*

## Installing

```shell
$ composer require laravel-widgets/Gearman -vvv
```

Optional, you can publish the config file:

```bash
$ php artisan vendor:publish --provider="LaravelWidgets\Gearman\ServiceProvider" --tag=config
```

> Change app config `config/app.config` 

```php

    'default' => 'gearman',

    'connections' => [
        'driver' => 'gearman',
        'host'   => 'localhost',
        'queue'  => 'default',
        'port'   => '4730',
        'timeout' => 1000, //milliseconds
    ]

```
