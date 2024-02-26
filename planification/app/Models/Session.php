<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    //belongsto module
    public function module(){
        return $this->belongsTo(Module::class);
    }
    public function sections()
    {
        return $this->belongsToMany(Section::class,'session_sections');
    }
    public function companies()
    {
        return $this->belongsToMany(Company::class,'session_companies');
    }
    
    //belongsto room 
    public function room(){
        return $this->belongsTo(Room::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    //belongsto type
    public function timing()
    {
        return $this->belongsTo(Timing::class);
    }
    public function week()
    {
        return $this->belongsTo(Week::class,'week_id');
    }
    //belongsto additional 
}
