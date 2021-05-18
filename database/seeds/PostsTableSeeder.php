<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $new_post = new Post();

            $new_post->name = $faker->name();
            $new_post->email = $faker->email();
            $new_post->date = $faker->date();
            $new_post->text = $faker->paragraph();

            $new_post->save();
        }
    }
}
