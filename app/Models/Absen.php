<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function pegawai(){
        return $this->belongsTo(Pegawai::class, 'pegawais_id', 'id');
    }
    function datakethadir(){
        return $this->belongsTo(Datakethadir::class, 'datakethadirs_id', 'id');
    }
}
