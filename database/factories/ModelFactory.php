<?php
use Faker\Generator;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\Access\User\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

/**
 * Command to generate 50 records
 * $students = factory('App\Models\Student',50)->create();
 */
$factory->define(App\Models\Student::class, function(Generator $faker){
    return [
        'name_kh' => $faker->name,
        'name_latin' => $faker->name,
        'photo' => "avatar.png",
        'dob' => \Carbon\Carbon::now(),
        'personal_phone' => $faker->phoneNumber,
        'parent_phone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'id_card' => 'e2016'.$faker->numberBetween(1, 9999),
        'address' => $faker->address,
        'description' => $faker->sentence(10),
        'about' => $faker->sentence(100),
        'promotion' => $faker->numberBetween(30, 35),
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
        'create_uid' => 1,
        'department_id' => 4
    ];
});