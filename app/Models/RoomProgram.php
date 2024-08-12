<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoomProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_active',
        'sesi'
    ];

    public function atglance(): HasMany
    {
        return $this->hasMany(AtGlanceProgram::class, 'room_id');
    }

    public function session(): HasMany
    {
        return $this->hasMany(ScheduleSession::class, 'room_id', 'id');
    }
}
