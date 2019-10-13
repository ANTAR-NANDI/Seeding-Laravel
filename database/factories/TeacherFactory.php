<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
    	    'name' => $faker->name('male'|'female'),
            'email' =>$faker->companyEmail,
            'address'=>$faker->address,
            'country'=>$faker->country,
            'city'=>$faker->city,
            'salary'=>$faker->numberBetween($min = 1000, $max = 9000),
            'credit_card_no'=>$faker->creditCardNumber,
            'birth_date' =>$faker->date($format = 'Y-m-d', $max = 'now') 
    ];
});
