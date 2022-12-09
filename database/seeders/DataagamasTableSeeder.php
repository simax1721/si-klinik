<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataagamasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dataagamas')->insert([ 'name' => 'ISLAM', ]);
        DB::table('dataagamas')->insert([ 'name' => 'KRISTEN', ]);
        DB::table('dataagamas')->insert([ 'name' => 'KATOLIK', ]);
        DB::table('dataagamas')->insert([ 'name' => 'HINDU', ]);
        DB::table('dataagamas')->insert([ 'name' => 'BUDHA', ]);
        DB::table('dataagamas')->insert([ 'name' => 'KONG HU CHU', ]);
    }
}
