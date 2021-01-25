<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class desa extends Model
{
    public function kecamatan(){
        return $this->belongsTo('app\Model\kecamatan','id_kecamatan');
    }
    public function rw(){
        return $this->hasMany('app\Model\rw','id_desa');
    }
}