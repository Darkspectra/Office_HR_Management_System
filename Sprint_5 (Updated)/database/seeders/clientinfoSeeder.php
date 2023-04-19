<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_info')->insert([
            'Name' => 'Farhan Novo',
            'Education' => 'B.sc Computer',
            'Address'=> 'Dhaka',
            'Skills'=> 'Watch anime, play games, create website',
        ]);
    }
}
