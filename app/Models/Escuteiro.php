<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuteiro extends Model
{
    public function patrulha()
    {
        return $this->belongsTo(Patrulha::class);
    }

    public function telefone(){
        return $this->hasOne(Telefone::class);
    }

    public function parente(){
        return $this->hasOne(Parente::class);
    }
}
