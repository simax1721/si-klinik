<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skkerja extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function pegawai(){
        return $this->belongsTo(Pegawai::class, 'pegawais_id', 'id');
    }

    function dataprofesi(){
        return $this->belongsTo(Dataprofesi::class, 'dataprofesis_id', 'id');
    }

    function datapangkat(){
        return $this->belongsTo(Datapangkat::class, 'datapangkats_id', 'id');
    }

    
}
