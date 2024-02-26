<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Section extends Model
{
    use HasFactory;
    // protected $primaryKey = 'section_id';
    //belongstocompany
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function sessions()
    {
        return $this->belongsToMany(Session::class,'session_sections');
    }
    public function battalion()
    {
        return $this->hasOneThrough(Battalion::class,Company::class);
    }
    //hasmany sessions
}
