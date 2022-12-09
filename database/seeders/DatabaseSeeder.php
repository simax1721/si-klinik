<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DataagamasTableSeeder::class);
        $this->call(DatakethadirTableSeeder::class);
        $this->call(DataharisTableSeeder::class);
        $this->call(DataprofesisTableSeeder::class);
        $this->call(DatapangkatsTableSeeder::class);

        $this->call(UserrolesTableSeeder::class);

        $this->call(PegawaisTableSeeder::class);
        // $this->call(AbsenTableSeeder::class);
    }
}
