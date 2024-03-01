<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;
    protected $primaryKey= 'id';
    protected $table  = 'weeks';
    public function schoolyear()
    {
        return $this->belongsTo(SchoolYear::class,'schoolyear_id');
    }
    public function Sessions()
    {
        return $this->hasMany(Session::class);
    }
    
    //belongsto type
}
