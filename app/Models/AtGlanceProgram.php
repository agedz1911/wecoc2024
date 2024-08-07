<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AtGlanceProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'time',
        'session',
        'title',
        'notes',
        'date_id',
        'room_id'
    ];

    public function dateProgram()
    {
        return $this->belongsTo(DateProgram::class, 'date_id');
    }

    public function roomProgram(): BelongsTo
    {
        return $this->belongsTo(RoomProgram::class, 'room_id');
    }
}
