<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    //belongsto module
    public function module(){
        return $this->belongsTo(Module::class);
    }
    
    public function sessionable()
    {
        return $this->morphTo();
    }
    public function absence()
    {
        return $this->morphOne(Absence::class,'absenceable');
    }
    public function anticipation()
    {
        return $this->hasOne(Anticipation::class);
    }
    //belongsto room 
    public function room(){
        return $this->belongsTo(Room::class);
    }
    //belongsto type
    public function timing()
    {
        return $this->belongsTo(Timing::class);
    }
    public function week()
    {
        return $this->belongsTo(Week::class,'week_id');
    }
    //belongsto additional 
}
