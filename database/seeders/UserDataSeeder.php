<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;



class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createMultipleUsers = [
            ['name'=>'Admin','email'=>'admin@gmail.com', 'password' => '1234','user_role'=>'0'],
            ['name'=>'Employee','email'=>'employee@gmail.com', 'password' =>'1234','user_role'=>'1'],
            ['name'=>'Customer','email'=>'customer@gmail.com', 'password' => '1234','user_role'=>'2']
        ];
        
        User::insert($createMultipleUsers);
        //
    }
}
