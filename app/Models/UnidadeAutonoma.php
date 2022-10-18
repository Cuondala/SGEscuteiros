<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadeAutonoma extends Model
{

    protected $fillable=['unidade_autonoma_nome', 'descricao','nucleo_id', 'seccao_id'];

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
