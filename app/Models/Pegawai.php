<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pegawai extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'pegawai';
    
    protected $guarded = ['created_at'];

    // protected $hidden = ['password'];

    function userrole(){
        return $this->belongsTo(Userrole::class, 'userroles_id', 'id');
    }
    
    function dataagama(){
        return $this->belongsTo(Dataagama::class, 'dataagamas_id', 'id');
    }
}
