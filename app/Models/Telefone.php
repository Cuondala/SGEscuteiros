<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    public function escuteiro(){
        return $this->belongsTo(Escuteiro::class);
    }

    public function dirigente(){
        return $this->belongsTo(Dirigente::class);
    }

    public function parente(){
        return $this->belongsTo(Parente::class);
    }
}
