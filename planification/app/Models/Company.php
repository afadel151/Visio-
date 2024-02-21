<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $primaryKey = 'company_id';
    //belongsto section
    public function sector(){
        return $this->belongsTo(Sector::class);
    }
    public function batallion()
    {
        return $this->belongsTo(Battalion::class);
    }
    public function sessions()
    {
        return $this->belongsToMany(Session::class,'session_companies');
    }
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    
    
}
