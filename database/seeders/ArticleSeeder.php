<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\Category as CategoryModel;
use App\Models\Writer as WriterModel;
use App\Models\Article as ArticleModel;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $writer = WriterModel::all();
        $category = CategoryModel::all();

        $title = ['Natural Language Processing',
        'Big Data', 'Python for Data Science',
        'Cyber Security', 'Network Security',
        'Security Assessment'
        ];

        for( $i = 0; $i < 6; $i++ ) {
            ArticleModel::create([
                'title' => $title[$i],
                'description' => $faker->paragraph,
                'image_path' => $i,
                'writer_id' => $i < 3 ? ($i % 2 == 0 ? 1 : 3) : 2,
                //writer 1 dan 3 untuk artikel data science, writer 2 untuk network security sesuai table writers
                'category_id' => $i < 3 ? 1 : 2
            ]);
        }
    }
}
