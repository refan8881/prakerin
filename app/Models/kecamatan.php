<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    public function kota(){
        return $this->belongsTo('app\Model\kota','id_kota');
    }
    public function desa(){
        return $this->hasMany('app\Model\desa','id_kecamatan');
    }
}
