<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalWeek extends Model
{
    use HasFactory;
    protected $table = 'global_weeks';
    protected $fillable = [
        'start_week_date',
        'end_week_date',
        'schoolyear_id',
        'created_at',
        'updated_at',
    ];
    public function events()
    {
        return $this->hasMany(Event::class, 'global_week_id');
    }
    public function sport_events()
    {
        return $this->hasMany(SportEvent::class, 'global_week_id');
    }
    public function weeks()
    {
        return $this->hasMany(Week::class, 'global_week_id');
    }
    public function schoolyear()
    {
        return $this->belongsTo(SchoolYear::class,'schoolyear_id');
    }
}
