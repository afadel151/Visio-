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

   
    public function modules()
    {
        return $this->belongsToMany(Module::class,'teachers_modules')->withPivot(['cours', 'td', 'tp']);
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
