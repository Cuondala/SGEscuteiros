<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{

    protected $fillable = [
        'numero_telefone',
        'dirigente_id',
        'escuteiro_id'
    ];

    public function escuteiro(){
        return $this->belongsTo(Escuteiro::class);
    }

    public function dirigente(){
        return $this->belongsTo(Dirigente::class);
    }

}
