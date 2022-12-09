<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataharisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dataharis')->insert([ 'name' => 'Senin', ]);
        DB::table('dataharis')->insert([ 'name' => 'Selasa', ]);
        DB::table('dataharis')->insert([ 'name' => 'Rabu', ]);
        DB::table('dataharis')->insert([ 'name' => 'Kamis', ]);
        DB::table('dataharis')->insert([ 'name' => 'Jumat', ]);
    }
}
