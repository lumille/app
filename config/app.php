<?php

return [
    'debug' => env("DEBUG", false),
    'name' => env("APP_NAME", "Lumille Framwork"),
    'locale' => 'en',

    "namespaces" => [
        "controller" => "App\\Controller\\"
    ],

    "providers" => [
        Lumille\Providers\ConfigServiceProvider::class,
        Lumille\Providers\EnvServiceProvider::class
    ],

    "alias" => [
        "Route" => Lumille\Facades\RouteFacade::class,
        "View" => Lumille\Facades\ViewFacade::class,
        "Config" => Lumille\Facades\ConfigFacade::class,
        'Request' => Lumille\Facades\RequestFacades::class,
        'Response' => Lumille\Facades\ResponseFacades::class
    ]
];