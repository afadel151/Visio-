<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rectification extends Model
{
    
    use HasFactory;
    protected $primaryKey = 'rectification_id';
    
    //has to teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
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
    public function absence(){
        return $this->hasOne(Absence::class);
    }
    //belongs to rectification
}
