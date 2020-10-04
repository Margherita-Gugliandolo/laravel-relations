<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Task;
use Faker\Generator as Faker;


$factory->define(Task::class, function (Faker $faker) {

      return [
        'name'   => $faker -> word(),
        'state'  => $faker -> text(),
        'city'   => $faker -> date(),
        'street' => $faker -> date()
      ];

});
