<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;
    // protected $primaryKey= 'week_id';
    public function week_type()
    {
        return $this->belongsTo(WeekType::class);// one-to-one relationship
    }
    public function Sessions()
    {
        return $this->hasMany(Session::class);
    }
    
    //belongsto type
}
