<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee')->insert([
            'name' => 'Farhan',
            'designation' => 'IT',
            'email'=> 'ftanvirnovo@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
