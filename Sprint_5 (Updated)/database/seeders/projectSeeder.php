<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project')->insert([
            'ProjectName' => 'chatGPT',
            'ProjectID' => '007',
            'Duration' => '96',
            'Name' => 'Farhan Tanvir',
            'Email' => 'ftanvirnovo@gmail.com',
        ]);
    }
}
