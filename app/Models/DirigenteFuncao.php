<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirigenteFuncao extends Model
{
    public function dirigente(){
        return $this->belongsTo(Dirigente::class);
    }
}
