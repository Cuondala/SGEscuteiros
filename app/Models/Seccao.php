<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccao extends Model
{
    public function agrupamento(){
        return $this->belongsTo(Agrupamento::class);
    }

    public function unidade_autonoma(){
        return $this->belongsTo(Unidade_Autonoma::class);
    }

    public function dirigente(){
        return $this->hasMany(Dirigente::class);
    }

    public function unidade()
    {
        return $this->hasMany(Unidade::class);
    }
}
