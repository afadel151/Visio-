<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    use HasFactory;
    protected $table = 'schoolyears';
    public function weeks()
    {
        return $this->hasMany(Week::class,'schoolyear_id');
    }
}
