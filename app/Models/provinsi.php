<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    public function kota(){
        return $this->hasMany('app\Model\kota','id_provinsi');
    }
}
