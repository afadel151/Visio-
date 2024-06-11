<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Holiday extends Model
{
    use HasFactory;
    public function schoolyear() : BelongsTo
    {
        return $this->belongsTo(Schoolyear::class);
    }
}
