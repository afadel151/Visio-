<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battalion extends Model
{
    use HasFactory;
    // protected $primaryKey = 'battalion_id';

    //hasmany companies
    public function companies()
    {
        return $this->hasMany(Company::class)->orderBy('company');
    }
    public function companies_MI(){
        return $this->hasMany(Company::class)->where('sector','MI')->orderBy('company');
    }
    public function companies_ST(){
        return $this->hasMany(Company::class)->where('sector','ST')->orderBy('company');
    }
    public function weeks()
    {
        return $this->hasMany(Week::class);
    }
    public function sections()
    {
        return $this->hasManyThrough(Section::class,Company::class)->orderBy('section');    
    }
    
}
