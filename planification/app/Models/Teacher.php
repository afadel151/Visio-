<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_name' ,
        'teacher_grade',
        'teacher_type',
        'department_id'
    ];
    public function scopeSearch($query)
    {
        $q = request('q');
        $query->where('first_name', 'like', "%$q%")
            ->orWhere('Last_name', 'like', "%$q%");
    }

    public function TpSessions()
    {
        return $this->belongsToMany(Session::class,'tp_teachers');
    }
    public function modules()
    {
        return $this->belongsToMany(Module::class,'teachers_modules')->withPivot(['cours', 'td', 'tp']);
    }
    public function SessionsAbsences()//Sure
    {
        return $this->hasMany(Session::class,'teacher_id')->where('absented',1)->where('caughtup',0);
    }
    public function nb_absences()//Sure
    {
        return $this->hasManyThrough(Absence::class,Session::class)->count();
    }
    public function department()//true
    {
        return $this->belongsTo(Department::class);
    }
  
 
}
