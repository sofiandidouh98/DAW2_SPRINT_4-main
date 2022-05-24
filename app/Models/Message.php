<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function sentBy()
    {
        return $this->belongsTo(User::class, 'sent_by');
    }
}
