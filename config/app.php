<?php

return [
    'debug' => true,
    'name' => 'Lumille',
    'locale' => 'en',

    "namespaces" => [
        "controller" => "App\\Controller\\"
    ],

    "providers" => [
        Lumille\Providers\ConfigServiceProvider::class,
        Lumille\Providers\EnvServiceProvider::class
    ],

    "alias" => [
        "Config" => Lumille\Facades\ConfigFacade::class,
        "Route" => Lumille\Facades\RouteFacade::class,
        "View" => Lumille\Facades\ViewFacade::class,
    ]
];