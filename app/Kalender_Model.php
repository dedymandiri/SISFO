<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Kalender_Model extends Model
{
    protected $table='kalender_sekolah';

    protected $fillable = ['file','keterangan'];
}


