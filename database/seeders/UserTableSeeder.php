<?php

namespace Database\Seeders;

use App\Models\User;
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
        $adminRecords=[[
            'id'=>'1','firstname'=>'Samwel','middlename'=>'Richard','lastname'=>'Masika','email'=>'admin@gmail.com','password'=>'$2a$12$FXmpccnsF8coowwQlHdOZOnPDKDyCmXlk.ksiRBxdFKUVTBv68gYC',
            'username'=>'admin','phone'=>'0714439960'],
           ];


        User::insert($adminRecords);


    }
}
