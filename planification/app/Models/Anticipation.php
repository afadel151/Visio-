<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anticipation extends Model
{
    use HasFactory;
    public function absence()
    {
        return $this->morphOne(Absence::class,'absenceable');
    }
    public function session()
    {
        return $this->belongsTo(Session::class);
    }

}
