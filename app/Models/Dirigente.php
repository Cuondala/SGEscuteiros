<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dirigente extends Model
{
    public function agrupamento(){
        return $this->belongsTo(Agrupamento::class);
    }

    public function seccao(){
        return $this->belongsTo(Seccao::class);
    }

    public function unidade(){
        return $this->belongsTo(Unidade::class);
    }

    public function unidade_autononoma(){
        return $this->belongsTo(Unidade_Autonoma::class);
    }

    public function patrulha(){
        return $this->belongsTo(Patrulha::class);
    }

    public function funcao(){
        return $this->hasOne(Dirigente_Funcao::class);
    }

    public function telefone(){
        return $this->hasMany(Telefone::class);
    }
}
