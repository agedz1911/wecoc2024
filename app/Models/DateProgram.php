<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DateProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'is_active'
    ];

    public function atglance(): HasMany
    {
        return $this->hasMany(AtGlanceProgram::class, 'date_id');
    }
}
