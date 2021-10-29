<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    use HasFactory;

    protected $table = "skil_setup"

    public function tipo_skils() {

        return $this->hasOne(tipo_skils::class);

    }

    public function categoria_skils() {
      
        
        return $this->hasOne(categoria_skils::class);
    } 
}