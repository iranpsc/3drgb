<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketResponse extends Model
{
    use HasFactory;

    protected $fillable = ['message', 'attachment', 'read_at', 'replied_at', 'user_id', 'ticket_id'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'کاربر حذف شده',
        ]);
    }

    public function isRead()
    {
        return $this->read_at !== null;
    }

    public function isUnread()
    {
        return $this->read_at === null;
    }

    public function isReplied()
    {
        return $this->replied_at !== null;
    }

    public function isUnreplied()
    {
        return $this->replied_at === null;
    }

    public function read()
    {
        $this->update(['read_at' => now()]);
    }

    public function unread()
    {
        $this->update(['read_at' => null]);
    }

    public function reply()
    {
        $this->update(['replied_at' => now()]);
    }

    public function unreplied()
    {
        $this->update(['replied_at' => null]);
    }

    public function isOwner()
    {
        return $this->user_id === auth()->id();
    }
}
