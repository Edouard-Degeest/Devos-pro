<?php
require_once '../db/database.php';

require_once '../vendor/autoload.php';

$faker = Faker\Factory::create();

for ($i=1; $i <=1000 ; $i++){
    $q = $db->prepare("INSERT INTO users(name, pseudo, email, password, active, created_at, city, country, sex, available_for_job, bio )
     VALUES(:name, :pseudo, :email, :password, :active, :created_at, :city, :country, :sex, :available_for_job, :bio)" );


    $q->execute([
        'name' => $faker->unique()->name,
        'pseudo' => $faker->unique()->userName,
        'email' => $faker->unique()->email,
        'password' => password_hash('123456',PASSWORD_BCRYPT),
        'active' => 0,
        'created_at' => $faker->date().' '.$faker->time(),
        'city' => $faker->city,
        'country' => $faker->country ,
        'sex' =>  $faker->randomElement(['H','F']),
        'available_for_job' => $faker->randomElement(['0','1']),
        'bio' =>  $faker->paragraph 
        ]);
}

echo 'utilisateur créé';

?>