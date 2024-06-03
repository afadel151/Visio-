<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    //belongs to department
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class,'teachers_modules')->withPivot(['cours', 'td', 'tp']);
    }
    //belongsto department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
    //belongstomany
}
