<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kecamatan;
use App\Models\Rw;

class desa extends Model
{
    public function kecamatan(){
        return $this->belongsTo('App\Models\kecamatan','id_kecamatan');
    }
    public function rw(){
        return $this->hasMany('App\Models\rw','id_desa');
    }
}