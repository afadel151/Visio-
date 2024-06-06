<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $table = 'configs';


    public function schoolyear()
    {
        return $this->belongsTo(Schoolyear::class);
    }
    public function global_week()
    {
        return $this->belongsTo(GlobalWeek::class);
    }
}
