<?php

use Illuminate\Database\Seeder;
use App\User;

class user_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();
    	User::create(array(
    	'first_name'     => 'Doug',
    	'last_name' => 'Bittinger',
//		'name'		=> '',
    	'email'    => 'bittids@gmail.com',
    	'password' => Hash::make('siErra44'),
    	));
    	 
    }
}
