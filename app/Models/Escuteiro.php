<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuteiro extends Model
{
    protected $fillable = [
        'escuteiro_nome',
        'bi',
        'endereco',
        'data_nascimento',
        'email',
        'descricao',
        'patrulha_id',
        'parente_id',
        'estado'
    ];

    public function patrulha()
    {
        return $this->belongsTo(Patrulha::class);
    }

    public function telefone(){
        return $this->hasOne(Telefone::class);
    }

    public function parente(){
        return $this->hasMany(Parente::class);
    }
}
