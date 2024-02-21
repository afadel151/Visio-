<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battalion extends Model
{
    use HasFactory;
    protected $primaryKey = 'battalion_id';

    //hasmany companies
    public function companies()
    {
        return $this->hasMany(Company::class);
    }
    public function weeks()
    {
        return $this->hasMany(Week::class, 'weeks');
    }
    public function sections()
    {
        return $this->hasManyThrough(Section::class,Company::class);    
    }
}
