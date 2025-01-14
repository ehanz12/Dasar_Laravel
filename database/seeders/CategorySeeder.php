<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web Design'
        ]);


        Category::create([
            'name' => 'Ui UX',
            'slug' => 'UI IX'
        ]);


        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'Machine Learning'
        ]);
    }
}
