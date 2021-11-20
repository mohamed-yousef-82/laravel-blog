<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Article::create([
            'title'=>'First Title',
            'body'=>'First body',
            'user_id'=>1
        ]);
        \App\Article::create([
            'title'=>'Second Title',
            'body'=>'Second body',
            'user_id'=>1
        ]);
        \App\Article::create([
            'title'=>'Third Title',
            'body'=>'Third body',
            'user_id'=>1
        ]);

    }
}
