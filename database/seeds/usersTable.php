<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('users')->insert([
        	'id_perfil'		=> '1',
            'name'          => 'Admin',
            'username'		=> 'Eloisa',
            'password'      => bcrypt('admin123'),
        ]);
    }
}


