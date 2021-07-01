<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Driver
    |--------------------------------------------------------------------------
    |
    | The Laravel queue API supports a variety of back-ends via an unified
    | API, giving you convenient access to each back-end using the same
    | syntax for each one. Here you may set the default queue driver.
    |
    | Supported: "sync", "beanstalkd", "sqs", "iron", "gearman"
    |
    */

    'default' => 'gearman',

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    */
    'connections' => [
        'gearman' => [
            'driver' => 'gearman',
            'host'   => 'localhost',
            'queue'  => 'default',
            'port'   => '4730',
            'timeout' => 1000, //milliseconds
        ],
    ],
];