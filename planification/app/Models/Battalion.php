<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Battalion extends Model
{
    use HasFactory;
    // protected $primaryKey = 'battalion_id';

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
    public function modules_ST($semester)
    {
        return Module::where('module_sector', 'ST')->where('battalion', $this->battalion)->where('semester', $semester)->get();
    }
    public function modules_MI($semester)
    {
        return Module::where('module_sector', 'MI')->where('battalion', $this->battalion)->where('semester', $semester)->get();
    }
    public function modules()
    {
        return Module::where('battalion', $this->battalion)->get();
    }
    public function modules_PR($semester)
    {
        return Module::where('module_sector', 'PR')->where('semester', $semester)->get();
    }
    public function teachers_ST($semester)
    {
        $modules = $this->modules_ST($semester)->pluck('id')->toArray();
        $teachers = Teacher::join('teachers_modules', 'teachers.id', '=', 'teachers_modules.teacher_id')
            ->whereIn('teachers_modules.module_id', $modules)
            ->where('teachers_modules.schoolyear_id', '=', $this->schoolyear_id)
            ->get();

        return $teachers;

    }
    public function teachers_PR($semester)
    {
        $modules = $this->modules_PR($semester)->pluck('id')->toArray();

        $teachers = Teacher::join('teachers_modules', 'teachers.id', '=', 'teachers_modules.teacher_id')
            ->whereIn('teachers_modules.module_id', $modules)
            ->where('teachers_modules.schoolyear_id', '=', $this->schoolyear_id)
            ->get();

        return $teachers;
    }
    public function teachers_MI($semester)
    {
        $modules = $this->modules_MI($semester)->pluck('id')->toArray();

        $teachers = Teacher::join('teachers_modules', 'teachers.id', '=', 'teachers_modules.teacher_id')
            ->whereIn('teachers_modules.module_id', $modules)
            ->where('teachers_modules.schoolyear_id', '=', $this->schoolyear_id)
            ->get();

        return $teachers;
    }
    public function weeks($schoolyear_id)
    {
        return $this->hasMany(Week::class)->where('schoolyear_id', $schoolyear_id);
    }
    public function sections()
    {
        return $this->hasManyThrough(Section::class, Company::class)->orderBy('section');
    }

}
