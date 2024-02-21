<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $primaryKey = 'sector_id';
    //hasmany companies
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
    public function teachers()
    {
        return $this->hasManyThrough(Teacher::class,Module::class);
    }
    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
