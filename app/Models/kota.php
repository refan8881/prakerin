<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provinsi;
use App\Models\Kecamatan;

class kota extends Model
{
    public function provinsi(){
        return $this->belongsTo('App\Models\provinsi','id_provinsi');
    }
    public function kecamatan(){
        return $this->hasMany('App\Models\kecamatan','id_kota');
    }
}
