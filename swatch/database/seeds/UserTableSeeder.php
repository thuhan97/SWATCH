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
    	$data=[
    		[
    			'email'=>'nts1997z@gmail.com',
    			'username'=>'roger',
    			'password'=>bcrypt('123456'),
    			'address'=>'Ha Noi',
    			'birthday'=>'1997-03-20',
    			'phone'=>'0977695448',	
    			'gender'=>0,
    			'level'=>1,
    			'avatar'=>'https://africageographic.com/wp-content/uploads/2015/03/roger-horrocks-100x100.jpeg'	
    		]
    	];

        //
        DB::table('users')->insert($data);
    }
}
