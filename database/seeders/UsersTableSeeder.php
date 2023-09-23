<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /*
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            //Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',
            ],

            //Medical Officer
            [
                'name' => 'Medical Officer',
                'username' => 'medical_officer',
                'email' => 'medicalofficer@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'medical_officer',
                'status' => 'active',
            ],

            //School Nurse
            [
                'name' => 'School Nurse',
                'username' => 'school_nurse',
                'email' => 'schoolnurse@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'school_nurse',
                'status' => 'active',
            ],

            //Class Adviser
            [
                'name' => 'Class Adviser',
                'username' => 'class_adviser',
                'email' => 'classadviser@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'class_adviser',
                'status' => 'active',
            ],

        ]);
    }
}
