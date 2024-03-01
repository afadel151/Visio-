<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatchUp extends Model
{
    use HasFactory;
    public function absence()
    {
        return $this->morphOne(Absence::class,'absenceable');
    }
    
}
