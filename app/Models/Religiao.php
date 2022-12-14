<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Religiao extends Model
{
    use HasFactory;


    public function nucleo(){

        return $this->belongsToMany(Nucleo::class, 'nucleos_religiaos')->withTimestamps();
    }
}
