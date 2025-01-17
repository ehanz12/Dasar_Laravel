<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'Web Design'            
        // ]);


        // Post::create([
        //     'title' => 'judul articles',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-articles-1',
        //     'body' => 'lorem hanya kita yang bikin wowowowoejeieheffueqbfurreewucnufrfewwnfiremwcnfjirewwnfijrewmr.'
        // ]);
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(20)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
