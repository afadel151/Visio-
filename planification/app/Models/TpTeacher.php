<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpTeacher extends Model
{
    use HasFactory;
    protected $table = 'tp_teachers';
    public function TpSession()
    {
        return $this->belongsTo(Session::class,'session_id');
    }
}
