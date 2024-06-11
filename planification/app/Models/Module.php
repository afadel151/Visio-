<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Module extends Model
{
    use HasFactory;
    public function teachers() : BelongsToMany
    {
        return $this->belongsToMany(Teacher::class,'teachers_modules')->withPivot(['cours', 'td', 'tp']);
    }
    //belongsto department
    public function department() : BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    public function module_schoolyears() : HasMany
    {
        return $this->hasMany(SchoolyearModule::class);
    }
}
