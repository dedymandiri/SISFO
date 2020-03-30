<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Jadwal_Model extends Model
{
    protected $table='jadwal_pelajaran';

    protected $fillable = ['file','keterangan'];

}


