<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'weeks';
    public function schoolyear()
    {
        $glw = GlobalWeek::find($this->global_week_id);
        $sy = SchoolYear::find($glw->schoolyear_id);
        return  $sy;

    }
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
    public function global_week()
    {
        return $this->belongsTo(GlobalWeek::class, 'global_week_id');
    }
    public function battalion()
    {
        return $this->belongsTo(Battalion::class);
    }
    public function absences()
    {
        return $this->hasMany(Session::class)->where(function($query){
            $query->where('sessions_table.absented',1);
        });
    }
    public function additives()
    {
        return $this->hasMany(Additive::class);
    }
    public function controls()
    {
        return $this->hasMany(Control::class);
    }
    public function catchups()
    {
        return $this->hasManyThrough(CatchUp::class,Additive::class);
    }
   
    //belongsto type
}
