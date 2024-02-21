<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $primaryKey = 'room_id';
    //belongsto block
    public function block()
    {
        return $this->belongsTo(Block::class);
    }
    //belongsto type

    //hasmany sessions
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
