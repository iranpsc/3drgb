<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsMessage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'subject', 'message', 'is_read'];

    protected $casts = [
        'is_read' => 'boolean',
    ];

    public function markAsRead()
    {
        $this->is_read = true;
        $this->save();
    }
}
