<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dirigente extends Model
{
    protected $fillable = [
        'dirigente_nome',
        'bi',
        'endereco',
        'data_nascimento',
        'email',
        'descricao',
        'agrupamento_id',
        'patrulha_id',
        'dirigente_funcao_id',
        'seccao_id',
        'unidade_id',
        'unidade_autonoma_id'
    ];

    public function agrupamento(){
        return $this->belongsTo(Agrupamento::class);
    }

    public function seccao(){
        return $this->belongsTo(Seccao::class);
    }

    public function unidade(){
        return $this->belongsTo(Unidade::class);
    }

    public function unidadeAutonoma(){
        return $this->belongsTo(UnidadeAutonoma::class);
    }

    public function patrulha(){
        return $this->belongsTo(Patrulha::class);
    }

    public function dirigenteFuncao(){
        return $this->belongsTo(DirigenteFuncao::class);
    }

    public function telefone(){
        return $this->hasOne(Telefone::class);
    }
}
