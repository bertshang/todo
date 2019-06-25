<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Task::class, function (Faker $faker) {
    return [
        'text' => $faker->text,
        'is_completed' => \App\Task::NOT_COMPLETED
    ];
});
