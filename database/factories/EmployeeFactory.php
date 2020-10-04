<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Employee;
use Faker\Generator as Faker;



$factory->define(Employee::class, function (Faker $faker) {
    return [
      'firstname' => $faker -> firstName(),
      'lastname'  => $faker -> lastName(),
      'username'  => $faker -> unique() -> userName(),
      'birthday'  => $faker -> date(),
      'bio'       => $faker -> text($maxNoChars=100),
      'salary'    => $faker -> randomFloat($nbMaxDecimals = 2, $min = 1000, $max = 10000),
      'rating'    => $faker -> randomDigit(),
      'fired'     => $faker -> boolean()
    ];
});
