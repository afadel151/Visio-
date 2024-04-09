<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    use HasFactory;
    protected $table = 'controls';
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function week()
    {
        return $this->belongsTo(Week::class);
    }
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function room()
    {
        return  $this->belongsTo(Room::class);
    }
    public function timing()
    {
        return $this->belongsTo(Timing::class);
    }
}
