<?php

use App\Category;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//      factory(\App\Post::class, 200)->create();
        factory(\App\Post::class, 200)->create()->each(function ($p) {
            $p->categories()->saveMany(Category::inRandomOrder()->take(rand(0, 5))->get());
        });
    }
}
