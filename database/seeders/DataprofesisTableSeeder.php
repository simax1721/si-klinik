<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataprofesisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dataprofesis')->insert([ 'name' => 'Dokter', ]);
        DB::table('dataprofesis')->insert([ 'name' => 'Perawat', ]);
    }
}
