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
        DB::table('users')->insert([
        	'name' => 'Phạm Tiến Đạt',
        	'password' => Hash::make('phamtiendat1603'),
        	'email' => 'phamtiendat1603@gmail.com'
        ]);
    }
}
