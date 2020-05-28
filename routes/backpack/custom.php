<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([//rutas que tendra acceso el Administrador y cliente
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => [
        config('backpack.base.web_middleware', 'web'),
        config('backpack.base.middleware_key', 'admin'),
        'role:Administrador|Cliente'
    ],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    Route::crud('venta', 'VentaCrudController');

}); // this should be the absolute last line of this file

Route::group([//rutas que tendra acceso el Administrador
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => [
        config('backpack.base.web_middleware', 'web'),
        config('backpack.base.middleware_key', 'admin'),
        'role:Administrador'
    ],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    Route::crud('producto', 'ProductoCrudController');
    Route::crud('proveedor', 'ProveedorCrudController');
    //Route::crud('venta', 'VentaCrudController');
}); // this should be the absolute last line of this file

