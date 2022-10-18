<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{

    public function nucleo(){
        return $this->hasMany(Nucleo::class, 'regiao_id');
    }
}
