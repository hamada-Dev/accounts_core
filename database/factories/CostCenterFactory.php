<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\Domain\CostCenter\CostCenter::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'description' => $faker->text,
    ];
});
