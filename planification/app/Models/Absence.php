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
    public function session()
    {
        return $this->morphTo('absenceable', 'absenceable_type', 'absenceable_id');
    }
    //has to module


    //belongs to rectification
}
