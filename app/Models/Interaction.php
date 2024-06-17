<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'interactable_id',
        'interactable_type',
        'type',
        'ip',
        'data',
        'interacted_at',
    ];

    protected $casts = [
        'data' => 'array',
        'interacted_at' => 'datetime',
    ];

    public function interactable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeUser($query, $user)
    {
        return $query->where('user_id', $user->id);
    }

    public function scopeIp($query, $ip)
    {
        return $query->where('ip', $ip);
    }

    public function scopeInteractable($query, $interactable)
    {
        return $query->where('interactable_id', $interactable->id)
            ->where('interactable_type', $interactable->getMorphClass());
    }
}
