<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\prof;
use Faker\Generator as Faker;

$factory->define(prof::class, function (Faker $faker) {
    return [
        //
		'cin' => $faker->ean8,
        'prenom' => $faker->word,
        'nom' => $faker->word,
		'sexe' => $faker->titleMale,
        'tel' => $faker->phoneNumber,
		'email' => $faker->email,
        'depart' => $faker->word,
    ];
});
