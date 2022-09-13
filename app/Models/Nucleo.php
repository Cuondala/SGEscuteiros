<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nucleo extends Model
{

    protected $fillable=['nucleo_nome', 'descricao', 'regiao_id' ,'religiao_id'];



   public function regiao(){
        return $this->belongsTo(Regiao::class, 'regiao_id', 'id');
   }

   public function agrupamento(){
        return $this->hasMany(Agrupamento::class);
   }

   public function unidade_autonoma(){
        return $this->hasMany(Unidade_Autonoma::class);
   }

   public function religiao(){

    return $this->belongsToMany(Religiao::class, 'nucleos_religiaos')->withTimestamps();
}
}

