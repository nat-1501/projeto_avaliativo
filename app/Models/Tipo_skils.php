<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_skils extends Model
{
    use HasFactory;

    public function skils(){

        return $this->belongsTo(Skils::class);

        
    }
}
