<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    use HasFactory;
    protected $table = 'additionals';
    public function absence()
    {
        return $this->morphOne(Absence::class,'absenceable');
    }
    public function sections() 
    {
        return $this->morphedByMany(Section::class, 'additionables');
    }
    
    /**
     * Get all of the videos that are assigned this tag.
     */
    public function companies()
    {
        return $this->morphedByMany(Company::class, 'additionables');
    }
}
