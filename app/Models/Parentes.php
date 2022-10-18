<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parente extends Model
{

    protected $fillable = [
        'responsavel_1',
        'responsavel_2'
    ];

   public function escuteiro(){
        return $this->hasMany(Escuteiro::class);
   }

}
