<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatakethadirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datakethadirs')->insert([ 'name' => 'Hadir', ]);
        DB::table('datakethadirs')->insert([ 'name' => 'Sakit', ]);
        DB::table('datakethadirs')->insert([ 'name' => 'Izin', ]);
        DB::table('datakethadirs')->insert([ 'name' => 'Tanpa Keterangan', ]);
    }
}
