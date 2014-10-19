<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        $user = User::create(array(
            'username' => 'pamelalim',
            'firstname' => 'Pamela',
            'lastname' => 'Lim',
            'email' => 'pamelaliusm@gmail.com',
            'password' => Hash::make('Japherlim')
        ));
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++)
        {
            $user = User::create(array(
                'username' => $faker->userName,
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'password' => $faker->word
            ));
        }
	}

}