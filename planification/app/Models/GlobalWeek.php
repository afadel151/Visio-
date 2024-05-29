<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalWeek extends Model
{
    use HasFactory;
    protected $table = 'global_weeks';
    protected $fillable = [
        'global_week_number',
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

    public function sessions()
    {
        return $this->hasManyThrough(Session::class, Week::class);
    }
    public function schoolyear()
    {
        return $this->belongsTo(SchoolYear::class, 'schoolyear_id');
    }

    public function absences()
    {
        return Absence::join('sessions_table', 'absences.absenceable_id', '=', 'sessions_table.id')
            ->join('weeks', 'sessions_table.week_id', '=', 'weeks.id')
            ->where('weeks.global_week_id', $this->id)
            ->get();
    }

    public function additives()
    {
        return $this->hasManyThrough(Additive::class,Week::class);
    }
}
