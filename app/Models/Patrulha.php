<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrulha extends Model
{
    public function escuteiro()
    {
        return $this->hasMany(Escuteiro::class);
    }

    public function dirigente(){
        return $this->hasOne(Dirigente::class);
    }

    public function unidade(){
        return $this->belongsTo(Unidade::class);
    }
}
