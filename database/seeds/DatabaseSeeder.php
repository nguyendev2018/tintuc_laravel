<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nguyen Van Teo',
            'email' => 'teonv@gmail.com',
            'password' => bcrypt('hehe'),
            'active' => 1,
            'idgroup' => 1,
            'username'=>'teo',
            'diachi'=>'TPHCM'
        ]);
        DB::table('users')->insert([
            'name' => 'Nguyen Van Ti',
            'email' => 'ti@gmail.com',
            'password' => bcrypt('hihi'),
            'active' => 1,'idgroup' => 1,
            'username'=>'ti',
            'diachi'=>'TPHCM'
        ]);
        DB::table('users')->insert([
            'name' => 'Nguyen Thi Gia Hu',
            'email' => 'giahu@gmail.com',
            'password' => bcrypt('huhu'),
            'active' => 1,'idgroup' => 0,
            'username'=>'giahu',
            'diachi'=>'HN'
        ]);
    }
}
