<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\Writer as WriterModel;
use Illuminate\Support\Arr;

class WriterSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $specialty = ['Data Science Specialist',
        'Network Security Specialist'
        ];

        for ($i = 0; $i < 3; $i++) {
            WriterModel::create([
                'name' => $faker->name,
                'specialty' => Arr::Random($specialty),
                'image_path' => $i
            ]);
        }
    }
}
