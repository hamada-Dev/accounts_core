<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Domain\Account\Account;

$factory->define( \Domain\Account\Account::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'description' => $faker->text,
    ];
});
