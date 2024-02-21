<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeekType extends Model
{
    use HasFactory;
    protected $primaryKey= 'week_type_id';
    
    public function weeks() 
    {
        return $this->hasMany(Week::class);
    }
}
