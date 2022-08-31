<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nucleo extends Model
{
   public function regiao(){
        return $this->belongsTo(Regiao::class);
   }

   public function agrupamento(){
        return $this->hasMany(Agrupamento::class);
   }

   public function unidade_autonoma(){
        return $this->hasMany(Unidade_Autonoma::class);
   }
}

