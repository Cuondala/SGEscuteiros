<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    public function patrulha()
    {
        return $this->hasMany(Patrulha::class);
    }

    public function dirigente(){
        return $this->hasMany(Dirigente::class);
    }

    public function seccao(){
        return $this->belongsTo(Seccao::class);
    }
}
