<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Foreach loop instead of passing second parameter in factory method
         * because Comment requires parent id. It won't get parent if
         * we are executing it in once. (Behind the scenes it's executing
         * only one query for batch insert so all comments will be
         * generated at once.
         */
        for ($i = 0; $i < 200; $i++) {
            factory(Comment::class, 5)->create();
        }
//        factory(Comment::class, 5)->create();
//        factory(Comment::class, 5)->create();
//        factory(Comment::class, 5)->create();
//        factory(Comment::class, 5)->create();
//        factory(Comment::class, 5)->create();
//        factory(Comment::class, 5)->create();
//        factory(Comment::class, 200)->create();
    }
}
