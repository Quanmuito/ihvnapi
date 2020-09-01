<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Fivestar;
use Faker\Generator as Faker;

$factory->define(Fivestar::class, function (Faker $faker) {
    return [
        'faction' => $faker->text(6),
        'name' => $faker->text(6),
        'class' => $faker->text(6),
        'skill1' => $faker->text(100),
        'skill2' => $faker->text(110),
        'skill3' => $faker->text(120),
        'skill4' => $faker->text(130),
        'hp' => 10000,
        'atk' => 2000,
        'armor' => 3000,
        'speed' => 4000,
        'aoe' => $faker->text(6),
        'cc' => $faker->text(6),
        'heal' => $faker->text(6),
        'img' => $faker->text(10),
        'avatar' => $faker->text(10),
        'user_id' => $faker->text(6)
    ];
});
