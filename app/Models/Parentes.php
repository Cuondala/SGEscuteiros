<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parente extends Model
{
   public function escuteiro(){
        return $this->hasMany(Escuteiro::class);
   }

   public function telefone(){
        return $this->hasMany(Telefone::class);
   }
}
