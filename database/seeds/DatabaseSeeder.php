<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')-> insert([
        	'name' => 'admin',
        	'email' => 'admin@admin.com',
        	'tipo' => 1,
        	'password' => bcrypt('admin'),
        ]);
    }
}
