<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirigenteFuncao extends Model
{
    protected $fillable=[
                            'cargo',
                            'descricao'
                        ];

    public function dirigente(){
        return $this->hasMany(Dirigente::class);
    }
}
