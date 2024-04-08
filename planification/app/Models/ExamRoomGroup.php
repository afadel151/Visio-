<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamRoomGroup extends Model
{
    use HasFactory;
    protected $table = 'exam_rooms_groups';
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
    public function room(){
        return $this->belongsTo(Room::class);
    }
    public function teachers(){
        return $this->belongsToMany(Teacher::class,'exams_monitoring');
    }
}
