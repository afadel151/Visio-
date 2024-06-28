<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Occasion extends Model
{
    use HasFactory;
    protected $fillable = [
      'occasion',
      'occasion_date',
      'timing_id'
    ];
    public function battalions() : MorphToMany
    {
        return $this->morphedByMany(Battalion::class, 'occasionable');
    }
    public function companies(): MorphToMany
    {
        return $this->morphedByMany(Company::class, 'occasionable');
    }
    public function sections() : MorphToMany
    {
        return $this->morphedByMany(Section::class, 'occasionable');
    }
    
    public function timings() : BelongsToMany
    {
        return $this->belongsToMany(Timing::class,'occasion_timings');
    }

}
