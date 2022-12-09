<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatapangkatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datapangkats')->insert([ 'name' => 'PNS', ]);
        DB::table('datapangkats')->insert([ 'name' => 'Honorer', ]);
    }
}
