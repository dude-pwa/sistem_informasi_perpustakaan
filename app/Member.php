<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
    	'kode_anggota', 'nama', 'alamat'
    ];
}
