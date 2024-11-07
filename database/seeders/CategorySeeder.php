<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\Category as CategoryModel;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $subject = ['Data Science', 'Network Security'];

        for( $i = 0; $i < 2; $i++ ) {
            CategoryModel::create([
                'subject' => $subject[$i]
            ]);
        }
    }
}
