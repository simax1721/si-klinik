<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        DB::table('pegawais')->insert([ 'nip' => '1', 'name' => 'M. Fadhlan', 'jk' => 'laki-laki', 'tmp_lahir' => '-', 'tgl_lahir' => '2001-10-17', 'dataagamas_id' => 1, 'no_hp' => '085225131557', 'email' => 'mfadhlan1721@gmail.com', 'alamat' => '-', 'tgl_masuk' => '2001-01-01', 'userroles_id' => 1,'password' => Hash::make('IZZA1224'), ]);
        DB::table('pegawais')->insert([ 'nip' => '2', 'name' => 'Rafika Farhana', 'jk' => 'perempuan', 'tmp_lahir' => 'Bener Meriah', 'tgl_lahir' => '2003-01-29', 'dataagamas_id' => 1, 'no_hp' => '085225342511', 'email' => 'rafikafarhana29@gmail.com', 'alamat' => 'Bener Meriah', 'tgl_masuk' => '2001-01-01', 'userroles_id' => 1,'password' => Hash::make('12345678'), ]);
        DB::table('pegawais')->insert([ 'nip' => '3', 'name' => 'Inayah Putri', 'jk' => 'perempuan', 'tmp_lahir' => 'Bireuen', 'tgl_lahir' => '2002-07-21', 'dataagamas_id' => 1, 'no_hp' => '082172670089', 'email' => 'inayahputri21@gmail.com', 'alamat' => 'Bireuen', 'tgl_masuk' => '2001-01-01', 'userroles_id' => 2,'password' => Hash::make('21072002'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200420', 'name' => 'Amelia Pratiwi', 'jk' => 'perempuan', 'tmp_lahir' => 'rumbai', 'tgl_lahir' => '1994-03-21', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'amel@gmail.com', 'alamat' => 'Rukoh', 'tgl_masuk' => '2014-10-23', 'userroles_id' => 2,'password' => Hash::make('11212200421'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200421', 'name' => 'Rifda Ariqah', 'jk' => 'perempuan', 'tmp_lahir' => 'Kampar', 'tgl_lahir' => '1993-01-09', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'ariqah@gmaik.com', 'alamat' => 'julingke', 'tgl_masuk' => '2013-10-23', 'userroles_id' => 2,'password' => Hash::make('11212200421'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200422', 'name' => 'Husna Luthfiyah', 'jk' => 'perempuan', 'tmp_lahir' => 'Pekanbaru', 'tgl_lahir' => '1998-05-23', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'husna.luthfiyah@gmail.com', 'alamat' => 'Baet', 'tgl_masuk' => '2012-10-16', 'userroles_id' => 2,'password' => Hash::make('11212200422'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200423', 'name' => 'Putri Ningsih', 'jk' => 'perempuan', 'tmp_lahir' => 'Langsa', 'tgl_lahir' => '1994-02-08', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'PutriNingsih@gmail.com', 'alamat' => 'julingke', 'tgl_masuk' => '2018-09-04', 'userroles_id' => 2,'password' => Hash::make('11212200423'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200424', 'name' => 'Rusli Simatupang', 'jk' => 'laki-laki', 'tmp_lahir' => 'Bagan Api', 'tgl_lahir' => '1994-10-03', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'tupang.rusli@gmail.com', 'alamat' => 'Kuta Alam', 'tgl_masuk' => '2013-10-23', 'userroles_id' => 2,'password' => Hash::make('11212200424'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200425', 'name' => 'Novfriyanto JS', 'jk' => 'laki-laki', 'tmp_lahir' => 'Kuansing', 'tgl_lahir' => '1992-11-02', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'nofri.js@gmail.com', 'alamat' => 'jalan arengka', 'tgl_masuk' => '2014-10-12', 'userroles_id' => 2,'password' => Hash::make('11212200425'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200426', 'name' => 'Saputra', 'jk' => 'laki-laki', 'tmp_lahir' => 'Bagan api', 'tgl_lahir' => '1994-12-01', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'bibe.putra@gmail.com', 'alamat' => 'jalan cipta karya', 'tgl_masuk' => '2012-09-22', 'userroles_id' => 2,'password' => Hash::make('11212200426'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200427', 'name' => 'Minggus Awit Pangestu', 'jk' => 'laki-laki', 'tmp_lahir' => 'pasir pengarayan', 'tgl_lahir' => '1994-07-23', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'minggus@gmail.com', 'alamat' => 'jalan manunggal', 'tgl_masuk' => '2013-07-23', 'userroles_id' => 2,'password' => Hash::make('11212200427'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200428', 'name' => 'Yossy Suryani', 'jk' => 'perempuan', 'tmp_lahir' => 'perawang', 'tgl_lahir' => '1991-01-01', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'yossy@gmail.com', 'alamat' => 'jalan manunggal', 'tgl_masuk' => '2012-10-23', 'userroles_id' => 2,'password' => Hash::make('11212200428'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200429', 'name' => 'M. Firdaus', 'jk' => 'laki-laki', 'tmp_lahir' => 'kota tengah', 'tgl_lahir' => '1992-12-12', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'daus.kece@gmail.com', 'alamat' => 'jalan cipta karya', 'tgl_masuk' => '1993-10-09', 'userroles_id' => 2,'password' => Hash::make('11212200429'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200430', 'name' => 'Muhammad Fadhli Ihsan', 'jk' => 'laki-laki', 'tmp_lahir' => 'Pekanbaru', 'tgl_lahir' => '1994-09-03', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'Fadhly.Ihsan@gmail.com', 'alamat' => 'Ulekareng', 'tgl_masuk' => '2011-10-16', 'userroles_id' => 2,'password' => Hash::make('11212200430'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200431', 'name' => 'Susilo Bambang', 'jk' => 'laki-laki', 'tmp_lahir' => 'Bekasi', 'tgl_lahir' => '1970-03-12', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'susilo.sby@gmail.com', 'alamat' => 'cadek', 'tgl_masuk' => '2010-01-02', 'userroles_id' => 2,'password' => Hash::make('11212200431'), ]);
        DB::table('pegawais')->insert([ 'nip' => '11212200431', 'name' => 'Akhbar Setiawan', 'jk' => 'laki-laki', 'tmp_lahir' => 'Pekanbaru', 'tgl_lahir' => '1994-02-02', 'dataagamas_id' => 1, 'no_hp' => '2147483647', 'email' => 'akhbar@gmail.com', 'alamat' => 'jalan cimpedak', 'tgl_masuk' => '2012-10-17', 'userroles_id' => 2,'password' => Hash::make('11212200431'), ]);

    }
}
