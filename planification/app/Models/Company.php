<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Company extends Model
{
    use HasFactory;
    //belongsto section
    
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
    


    public function sections()
    {
        return $this->hasMany(Section::class)->orderBy('section');
    }
    public function teachers()
    {
        return $this->hasManyThrough(
            Teacher::class,
            Module::class,
            'battalion', // Foreign key on modules table
            'department_id', // Foreign key on teachers table
            'battalion_id', // Local key on companies table
        );
    }
    public function modules()
    {

        return $this->hasMany(Module::class, 'battalion', 'battalion_id')->where('module_sector', $this->sector);
    }
    public function additionals()
    {
        return $this->morphToMany(Additional::class,'additionables');
    }
    
}
