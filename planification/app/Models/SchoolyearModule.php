<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolyearModule extends Model
{
    use HasFactory;
    protected $table = 'schoolyear_modules';
    protected $fillable = [
        'schoolyear_id',
        'module_id',
        'battalion',
        'semester',
        'module_sector',
        'nb_cours',
        'nb_tds',
        'nb_tps'
    ];
    public function schoolyear()
    {
        return $this->belongsTo(Schoolyear::class);
    }
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function battalion()
    {
        return $this->belongsTo(Battalion::class);
    }
    public function department()
    {

        return $this->module->belongsTo(Department::class);
    }

}
