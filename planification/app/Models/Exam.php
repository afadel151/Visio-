<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $table = 'exams';
    protected $fillable = [
        'module_id',
        'sector',
        'exam_time',
        'exam_date',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class,'module_id');

    }
    public function week()
    {
        return $this->belongsTo(Week::class,'week_id');
    }
    public function rooms_groups()
    {
        return $this->hasMany(ExamRoomGroup::class,'exam_id');
    }
}
