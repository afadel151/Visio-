<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

class Battalion extends Model
{
    use HasFactory;
    //hasmany companies
    public function schoolyear()
    {
        return $this->belongsTo(SchoolYear::class, 'schoolyear_id');
    }
    public function companies()
    {
        return $this->hasMany(Company::class)->orderBy('company');
    }
    public function companies_MI()
    {
        return $this->hasMany(Company::class)->where('sector', 'MI')->orderBy('company');
    }
    public function companies_ST()
    {
        return $this->hasMany(Company::class)->where('sector', 'ST')->orderBy('company');
    }
    public function companies_PR()
    {
        return $this->hasMany(Company::class)->where('sector', 'PR')->orderBy('company');
    }
    public function modules_ST()
    {
        return $this->belongsToMany(Module::class, 'schoolyear_modules')->withPivot(['semester', 'module_sector', 'nb_cours', 'nb_tds', 'nb_tps'])->where('module_sector', 'ST');
    }
    public function modules_MI()
    {
        return $this->belongsToMany(Module::class, 'schoolyear_modules')->withPivot(['semester', 'module_sector', 'nb_cours', 'nb_tds', 'nb_tps'])->where('module_sector', 'MI');
    }
    public function modules()
    {
     
        return $this->belongsToMany(Module::class, 'schoolyear_modules')->withPivot(['semester', 'module_sector', 'nb_cours', 'nb_tds', 'nb_tps']);
    }
    public function modules_PR(): BelongsToMany
    {
        return $this->belongsToMany(Module::class, 'schoolyear_modules')->withPivot(['semester', 'module_sector', 'nb_cours', 'nb_tds', 'nb_tps'])->where('module_sector', 'PR');
    }
    public function teachers_ST($semester)
    {
        $modules = $this->modules_ST()->where('semester', $semester)->pluck('modules.id')->toArray();
        $joinResults = Module::whereIn('modules.id', $modules)
            ->join('teachers_modules', 'modules.id', '=', 'teachers_modules.module_id')
            ->where('teachers_modules.schoolyear_id', $this->original['schoolyear_id'])
            ->join('teachers','teachers_modules.teacher_id','=','teachers.id')
            ->get();
        return $joinResults;

    }
    public function teachers_PR(int $semester)
    {
        $modules = $this->modules_PR()->where('semester', $semester)->pluck('modules.id')->toArray();
        $joinResults = Module::whereIn('modules.id', $modules)
            ->join('teachers_modules', 'modules.id', '=', 'teachers_modules.module_id')
            ->where('teachers_modules.schoolyear_id', $this->original['schoolyear_id'])
            ->join('teachers','teachers_modules.teacher_id','=','teachers.id')
            ->get();
        return $joinResults;
    }
   
    public function teachers_MI($semester)
    {
        
        $modules = $this->modules_MI()->where('semester', $semester)->pluck('modules.id')->toArray();
        $joinResults = Module::whereIn('modules.id', $modules)
            ->join('teachers_modules', 'modules.id', '=', 'teachers_modules.module_id')
            ->where('teachers_modules.schoolyear_id', $this->original['schoolyear_id'])
            ->join('teachers','teachers_modules.teacher_id','=','teachers.id')
            ->get();
        return $joinResults;

        }
    public function weeks($schoolyear_id): HasMany
    {
        return $this->hasMany(Week::class)->where('schoolyear_id', $schoolyear_id);
    }
    public function sections(): HasManyThrough
    {
        return $this->hasManyThrough(Section::class, Company::class)->orderBy('section');
    }
    public function schoolyear_modules(): HasMany
    {
        return $this->hasMany(SchoolyearModule::class, 'battalion_id');
    }
    // public function modules() : HasManyThrough
    // {
    //     return $this->hasManyThrough(Module::class,SchoolyearModule::class);
    // }

}
