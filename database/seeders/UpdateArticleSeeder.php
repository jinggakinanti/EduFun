<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\Article as ArticleModel;

class UpdateArticleSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        ArticleModel::all()->each(function ($article) use ($faker) {
            $article->view = $faker->numberBetween(100, 1000);  
            $article->save();  
        });
    }
}
