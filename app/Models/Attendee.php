<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relationships\BelongsTo;
use Illuminate\Database\Eloquent\Relationships\HasMany;




class Attendee extends Model
{
    use HasFactory;


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function event(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
