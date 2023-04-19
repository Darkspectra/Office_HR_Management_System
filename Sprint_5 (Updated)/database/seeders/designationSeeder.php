<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class designationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designation')->insert([
            'designation' => 'Senior Graphic Designer',
            'seat' => '5',
            'benefits'=> 'good environment, health insurance, high salary, weekly vacation',
        ]);
    }
}
