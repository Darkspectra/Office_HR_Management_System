<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class visitor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visitor')->insert([
            ['Job_title' => 'Web developer',
            'Available' => '5',
            'Salary' => '5000'],
            ['Job_title' => 'Software Engineer',
            'Available' => '9',
            'Salary' => '7000'],
            ['Job_title' => 'System Analyst',
            'Available' => '3',
            'Salary' => '50000']

        ]);
    }
}
