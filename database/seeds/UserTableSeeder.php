<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed
        DB::table('users')->insert([
        	'name' => 'Manuel',
        	'apellido'=> 'Cardenas',
        	'email' => 'prueba@gmail.com',
        	'password' => bcrypt('123456789'),
        ]);
    }
}
