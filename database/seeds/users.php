<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arr = [
        	'name' 		=> 'admin',
        	'username' 	=> 'lui01212',
        	'password' 	=> md5('bokinhvan'),
        	'level'		=> 1
        ];
        DB::table('users')->insert($arr);
    }
}
