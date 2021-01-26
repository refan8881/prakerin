<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Desa;
use App\Models\Kasus;

class rw extends Model
{
    public function desa(){
        return $this->belongsTo('App\Models\desa','id_desa');
    }
    public function kasus(){
        return $this->hasMany('App\Models\kasus','id_rw');
    }
}
