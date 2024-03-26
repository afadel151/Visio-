<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $table = 'sessions_table';
    //belongsto module
    protected $fillable = [
        'session_date',
        'teacher_id',
        'timing_id',
        'room_id',
        'module_id',
        'week_id',
        'session_type',
        'sessionable_type',
        'sessionable_id',
    ];

    public function rectification()
    {
        return $this->hasOne(Rectification::class);
    }
    public function rectificationRoom()
    {
        return $this->rectification()->belongsTo(Room::class, 'room_id');
    }
    public function rectificationTime()
    {
        return $this->rectification()->belongsTo(Timing::class, 'timing_id');
    }
    public function class()
    {
        if ($this->sessionable_type == 'App\\Models\\Company') {
            $c = Company::find($this->sessionable_id);
            return 'Company ' . $c->battalion->battalion . $c->company;
        } elseif ($this->sessionable_type == 'App\\Models\\Section') {
            $s = Section::find($this->sessionable_id);
            return 'Section ' . $s->section;
        }
    }
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function TpTeachers()
    {
        return $this->belongsToMany(Teacher::class,'tp_teachers');
    }
    public function sessionable()
    {
        return $this->morphTo();
    }
    public function absence()
    {
        return $this->morphOne(Absence::class, 'absenceable');
    }
    public function anticipation()
    {
        return $this->hasOne(Anticipation::class);
    }
    //belongsto room 
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
    public function absences()
    {
        return $this->hasMany(Absence::class, 'absenceable_id')->where('absenceable_type', 'App\Models\Session');
    }
    //belongsto type
    public function timing()
    {
        return $this->belongsTo(Timing::class);
    }
    public function week()
    {
        return $this->belongsTo(Week::class, 'week_id');
    }
    public function globalWeek()
    {
        return $this->belongsTo(GlobalWeek::class, 'week_id', 'id');
    }
    //belongsto additional 
}
