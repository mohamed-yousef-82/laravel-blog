<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            'name'=>'Ahmed',
            'email'=>'yourmail1@yahoo.com',
            'password'=>'123'
        ]);
        \App\User::create([
            'name'=>'Saed',
            'email'=>'yourmail2@yahoo.com',
            'password'=>'123'
        ]);
        \App\User::create([
            'name'=>'Kareem',
            'email'=>'yourmail3@yahoo.com',
            'password'=>'123'
        ]);
    }
}
