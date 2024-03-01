<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportEvent extends Model
{
    use HasFactory;
    protected $table = 'sport_events';

    public function global_week()
    {
        return $this->belongsTo(GlobalWeek::class);
    }
}
