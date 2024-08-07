<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoomProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_active'
    ];

    public function atglance(): HasMany
    {
       return $this->hasMany(AtGlanceProgram::class, 'room_id');
    }
}
