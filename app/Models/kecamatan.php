<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kota;
use App\Models\Desa;

class kecamatan extends Model
{
    public function kota(){
        return $this->belongsTo('App\Models\kota','id_kota');
    }
    public function desa(){
        return $this->hasMany('App\Models\desa','id_kecamatan');
    }
}
