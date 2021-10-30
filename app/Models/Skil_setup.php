<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    use HasFactory;

    protected $table = "skil_setup"

    public function senioridade() {

        return $this->hasOne(senioridade::class);

    }

    public function nivel_exig() {
      
        
        return $this->hasOne(nivel_exig::class);
    } 
}