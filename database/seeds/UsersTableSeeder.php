<?php

use Illuminate\Database\Seeder;
/**
 * Created by PhpStorm.
 * User: acer-usrpu
 * Date: 4/29/2017
 * Time: 10:33 PM
 */
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([

            [

                'username'=>'admin',
                'email'=>'mainalipukar@gmail.com',
                'student_id' =>0,
                'password'=> bcrypt('admin123'),
            ]
        ]);
    }

}