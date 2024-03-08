<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Section extends Model
{
    use HasFactory;
    // protected $primaryKey = 'section_id';
    //belongstocompany
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function session($date,$time)
    {
        // return $this->morphToMany(Session::class, 'sessionable','sessions','sessionable_id');
        return Session::where('sessionable_type','App\Models\Section')
                        ->where('sessionable_id',$this->id)
                        ->where('session_date',$date)
                        ->where('timing_id',$time)->first();
    }
    public function additionals()
    {
        return $this->morphToMany(Additional::class,'additionables');
    }
    public function battalion()
    {
        return $this->hasOneThrough(Battalion::class,Company::class);
    }
    //hasmany sessions
}
