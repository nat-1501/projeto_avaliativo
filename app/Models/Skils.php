<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skils extends Model
{
    use HasFactory;

    protected $table = "skils"

    public function tipo_skils() {

        return $this->hasOne(tipo_skils::class);

    }

    public function categoria_skils() {
      
        
        return $this->hasOne(categoria_skils::class);

    }    

    public function skil_setup() {
      
        
        return $this->hasMany(skil_setup::class);
    } 
}
