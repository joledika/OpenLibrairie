<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Book;
use App\User;
use App\Contact;
use App\Profile;
use App\Account;
use App\Category;
use App\Commentary;
use App\Downloaded;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'account_id' => random_int(1, 2),
        'password' => bcrypt('password'), // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(Profile::class, function (Faker $faker) {

    $gender = ['male','female'];
    return [
        'lastName' => $faker->lastName,
        'firstName' => $faker->firstName,
        'address' => $faker->text(10),
        'description' => $faker->text(100),
        'gender' => $gender[random_int(0,1)],
        'phone' => $faker->phoneNumber,
    ];
});
$factory->define(Account::class, function (Faker $faker) {


    return [
        'rank' => random_int(1, 12),
        'label' => $faker->text(10),

    ];
});


$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->text(900),

        'book'=>$faker->paragraph,


    ];
});

$factory->define(Downloaded::class, function (Faker $faker) {
    return [
        'downloads' =>random_int(0,700),




    ];
});

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'facebook' => $faker->text(16),
        'github' => $faker->text(16),
        'twitter' => $faker->text(16),
        'youtube' => $faker->text(16),



    ];
});

$factory->define(Category::class, function (Faker $faker) {
    $couleurs = ['red','primary','pink','yellow','teal','orange'];
    return [
        'color' => $couleurs[random_int(0,5)],
        'description' => $faker->text(60),
        'name' => $faker->name,


    ];
});

$factory->define(Commentary::class, function (Faker $faker) {
    return [

        'commentary' => $faker->text(900),



    ];
});
