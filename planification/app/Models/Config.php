<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $table = 'configs';
    protected $fillable = [
        'current_schoolyear_id',
        'current_global_week_id'
    ];

    public function schoolyear()
    {
        return $this->belongsTo(Schoolyear::class,'current_schoolyear_id');
    }
    public function global_week()
    {
        return $this->belongsTo(GlobalWeek::class,'current_global_week_id');
    }
}
