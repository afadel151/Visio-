<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    use HasFactory;
    protected $table = 'schoolyears';
    protected $fillable = ['schoolyear','schoolyear_start_date'];
    public function weeks()
    {
        return $this->hasManyThrough(Week::class,GlobalWeek::class);
    }
    public function global_weeks()
    {
        return $this->hasMany(GlobalWeek::class,'schoolyear_id');
    }

    public function battalions()
    {
        return $this->hasMany(Battalion::class,'schoolyear_id');
    }
    public function schoolyear_modules()
    {
        return $this->hasMany(SchoolyearModule::class,'schoolyear_id');
    }
    public function modules()
    {
        return $this->hasManyThrough(Module::class,SchoolyearModule::class);
    }
}
