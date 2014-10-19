<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++)
        {
            $post = Post::create(array(
                'title' => $faker->sentence(),
                'excerpt' => $faker->text(),
                'content' => $faker->paragraph(),
                'published' => TRUE,
                'content_html' => $faker->url
            ));
        }
	}

}