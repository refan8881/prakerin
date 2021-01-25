<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    public function provinsi(){
        return $this->belongsTo('app\Model\provinsi','id_provinsi');
    }
    public function kecamatan(){
        return $this->hasMany('app\Model\kecamatan','id_kota');
    }
}
