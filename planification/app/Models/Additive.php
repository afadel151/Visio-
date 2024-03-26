<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additive extends Model
{
    use HasFactory;
    protected $table = 'additives';

    public function week(){
        return $this->belongsTo(Week::class);
    }
    public function rectifications()
    {
        return $this->hasMany(Rectification::class,'additive_id');
    }
    public function catchups(){
        return $this->hasMany(CatchUp::class,'additive_id');
    }
    public function additionals()
    {
        return $this->hasMany(Additional::class,'additive_id');
    }
}
