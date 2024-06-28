<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;
    protected $table ='exams_monitoring';
    protected $fillable = [
        'room_group_id',
        'teacher_id',
        'absented'];

    public function exam_room_group()
    {
        return $this->belongsTo(ExamRoomGroup::class, 'room_group_id');
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
    public function exam()
    {
        return $this->hasOneThrough(Exam::class,ExamRoomGroup::class);
    }

}
