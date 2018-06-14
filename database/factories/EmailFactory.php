<?php

use Faker\Generator as Faker;

$factory->define(App\Email::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'email' =>$faker->email(),
        'msg'   =>$faker->sentence(rand(6, 12)),
    ];
});
