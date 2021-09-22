<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
use App\Category;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $categoryList = [
            'News & Affairs',
            'Health & Medicine',
            'Technology',
            'Art & Culture',
            'Politics',
            'Sports',
            'Lifestyle',
        ];

        $listOfCategoryID = [];

        foreach($categoryList as $category) {
            $categoryObject = New Category();
            $categoryObject->name = $category;
            $categoryObject->save();

            $listOfCategoryID[] = $categoryObject->id;
        }

        for ($i = 0; $i < 30; $i++) {
            $postObject = new Post();
            $postObject->title = $faker->sentence(3);
            $postObject->author = $faker->word();
            $postObject->body = $faker->paragraphs(15, true);

            $categoryKey = array_rand($listOfCategoryID, 1);
            $categoryID = $listOfCategoryID[$categoryKey];
            $postObject->category_id = $categoryID;

            $postObject->tags = $faker->word();
            $postObject->comments = $faker->randomDigit();
            $postObject->date = $faker->date();

            $postObject->save();
        }
    }
}
