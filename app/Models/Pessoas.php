<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    use HasFactory;

    protected $table = "pessoas"

    public function cargos() {

        return $this->hasOne(Cargos::class);

    }

    public function senioridade() {
      
        
        return $this->hasOne(senioridade::class);
    } 
}

