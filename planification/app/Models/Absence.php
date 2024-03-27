<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{

    use HasFactory;
    
    //has to teacher
    public function absenceable()
    {
        return $this->morphTo();
    }
}
