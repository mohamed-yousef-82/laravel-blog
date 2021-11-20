<?php

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
        //
        \App\Comment::create([
            'comment'=>'First comment',
            'article_id'=>1
        ]);
        \App\Comment::create([
            'comment'=>'Second comment',
            'article_id'=>1
        ]);
        \App\Comment::create([
            'comment'=>'Second comment',
            'article_id'=>1
        ]);
    }
}
