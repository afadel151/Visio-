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
}
