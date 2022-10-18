<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agrupamento extends Model
{
    protected $fillable = [
        'agrupamento_nome',
        'descricao',
        'nucleo_id'];

   public function nucleo(){
        return $this->belongsTo(Nucleo::class);
   }

   public function dirigente(){
        return $this->hasMany(Dirigente::class);
   }

   public function seccao(){
        return $this->hasMany(Seccao::class);
   }
}
