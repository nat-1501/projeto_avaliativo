<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senioridade extends Model
{
    use HasFactory;

    public function senioridade(){

        return $this->belongsTo(Pessoas::class);
        
    }
}
