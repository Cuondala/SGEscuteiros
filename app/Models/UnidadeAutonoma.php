<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade_Autonoma extends Model
{
   public function nucleo(){
        return $this->belongsTo(Nucleo::class);
   }

   public function seccao(){
        return $this->hasOne(Seccao::class);
   }

   public function dirigente(){
        return $this->hasMany(Dirigente::class);
   }
}
