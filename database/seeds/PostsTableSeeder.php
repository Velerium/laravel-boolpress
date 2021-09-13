<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $postObject = new Post();
            $postObject->title = $faker->sentence(3);
            $postObject->author = $faker->word();
            $postObject->categories = $faker->words(3, true);
            $postObject->tags = $faker->word();
            $postObject->comments = $faker->randomDigit();
            $postObject->date = $faker->date();
            $postObject->save();
        }
    }
}
