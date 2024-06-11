<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\DB;
class Company extends Model
{
    use HasFactory;

    
    public function battalion()
    {
        return $this->belongsTo(Battalion::class);
    }
    public function session($date,$time)
    {
        return Session::where('session_date',$date)
                        ->where('timing_id',$time)
                        ->where('sessionable_type','App\\Models\\Company')
                        ->where('sessionable_id',$this->id)->first();
    }
    public function occasion()
    {
        return $this->morphOne(Occasion::class,'occasionable');
    }
    
    public function controls()
    {
        return $this->hasMany(Control::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class)->orderBy('section');
    }
    // public function teachers()
    // {
    //     return $this->hasManyThrough(
    //         Teacher::class,
    //         Module::class,
    //         'battalion', // Foreign key on modules table
    //         'department_id', // Foreign key on teachers table
    //         'battalion_id', // Local key on companies table
    //     );
    // }
    public function modules()
    {

        return $this->battalion->modules->where('module_sector',$this->sector);
    }
    public function additionals() : MorphToMany
    {
        return $this->morphToMany(Additional::class,'additionable');
    }
    public function sessions() : MorphMany
    {
        return $this->morphMany(Session::class,'sessionable');
    }
   
    
}
