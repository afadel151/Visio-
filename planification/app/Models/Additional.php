<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Additional extends Model
{
    use HasFactory;
    protected $table = 'additionals';
    protected $fillable = [
        'teacher_id',
        'module_id',
        'timing_id',
        'additional_date',
        'session_type',
        'additive_id',
        'room_id'
    ];
    public function companies(): MorphToMany
    {
        return $this->morphedByMany(Company::class, 'additionable');
    }
    public function sections() : MorphToMany
    {
        return $this->morphedByMany(Section::class, 'additionable');
    }
    public function room() 
    {
        return $this->belongsTo(Room::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function timing (){
        return $this->belongsTo(Timing::class);
    }
    /**
     * Get all of the videos that are assigned this tag.
     */
 
}
