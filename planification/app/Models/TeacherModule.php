<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherModule extends Model
{
    use HasFactory;
    protected $table = 'teachers_modules';
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function module(){
        return $this->belongsTo(Module::class);
    }
    public function schoolyear(){
        return $this->belongsTo(SchoolYear::class,'schoolyear_id');
    }
}
