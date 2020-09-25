<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Tenstar;
use Faker\Generator as Faker;

$factory->define(Tenstar::class, function (Faker $faker) {
    $faction = array("shadow", "fortress", "albyss", "forest", "dark", "light", "void");
    $class = array("warrior", "mage", "ranger", "assasin", "priest");
    $aoe = array("none", "frontline", "backline", "random", "all");
    $cc = array("none", "stun", "freeze", "petrify", "silence", "horrify", "trasform");
    $heal = array("none", "self", "others", "both");

    return [
        'faction' => $faction[random_int(0, 6)],
        'name' => $faker->text(10),
        'class' => $class[random_int(0, 4)],
        'skill1' => $faker->text(100),
        'skill2' => $faker->text(110),
        'skill3' => $faker->text(120),
        'skill4' => $faker->text(130),
        'hp' => random_int(5000, 10000),
        'atk' => random_int(3000, 5000),
        'armor' => random_int(1000, 3000),
        'speed' => random_int(500, 1000),
        'aoe' => $aoe[random_int(0, 4)],
        'cc' => $cc[random_int(0, 6)],
        'heal' => $heal[random_int(0, 3)],
        'img' => 'dummy_image.jpg',
        'avatar' => 'dummy_avatar.png',
        'user_id' => random_int(1, 2)
    ];
});
