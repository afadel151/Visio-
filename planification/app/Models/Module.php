<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Module extends Model
{
    use HasFactory;
    protected $primaryKey = 'module_id';
    //belongs to department
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class,'teachers_modules');
    }
    //belongsto department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
    //belongstomany
}
