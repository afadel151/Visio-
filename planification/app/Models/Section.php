<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $primaryKey = 'section_id';
    //belongstocompany
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function batallion()
    {
        return $this->through(Company::class)->has(Battalion::class);
    }
    public function sessions()
    {
        return $this->belongsToMany(Session::class,'session_sections');
    }
    //hasmany sessions
}
