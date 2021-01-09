<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->state(Role::class,'admin', function (Faker $faker) {
    return [
        "role"=> 'Super Admin'
    ];
});
$factory->state(Role::class,'user', function (Faker $faker) {
    return [
        "role"=> 'User'
    ];
});
