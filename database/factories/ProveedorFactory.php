<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Proveedor;
use Faker\Generator as Faker;

$factory->define(Proveedor::class, function (Faker $faker) {
    return [
        'nombre_proveedor' =>$faker->name,
        'telefono_proveedor'=>$faker->phoneNumber,
        'direccion_proveedor'=>$faker->unique()->address
    ];
});
