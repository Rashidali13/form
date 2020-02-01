<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    $title =  $faker->sentence();
    return [
        'title' => $faker->sentence(),
        'slug' => str_slug($title),
    ];
});
