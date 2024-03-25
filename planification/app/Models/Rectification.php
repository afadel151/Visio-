<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rectification extends Model
{
    
    use HasFactory;
    
    public function timing(){
        return $this->belongsTo(Timing::class,'timing_id');
    }
    public function session()
    {
        return $this->belongsTo(Session::class,'session_id');
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
