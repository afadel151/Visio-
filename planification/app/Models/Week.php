<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;
    protected $primaryKey= 'id';
    protected $table  = 'weeks';
    public function schoolyear()
    {
        return $this->belongsTo(SchoolYear::class,'schoolyear_id');
    }
    public function Sessions()
    {
        return $this->hasMany(Session::class);
    }
    public function global_week()
    {
        return $this->belongsTo(GlobalWeek::class,'global_week_id');
    }
    public function battalion()
    {
        return $this->belongsTo(Battalion::class);
    }

    //belongsto type
}
