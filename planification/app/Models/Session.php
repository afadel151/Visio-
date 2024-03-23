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
    public function module()
    {
        return $this->belongsTo(Module::class);
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
