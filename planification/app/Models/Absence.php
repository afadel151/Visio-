<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    
    use HasFactory;
    
    //has to teacher
    public function session()
    {
        return $this->belongsTo(Session::class);
    }
    //has to module
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function rectification()
    {
        return $this->hasOne(Rectification::class);
    }

    
    //belongs to rectification
}
