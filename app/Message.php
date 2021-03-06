<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Message extends Model
{
    use Notifiable;

    protected $fillable= ['id', 'to', 'from', 'message', 'is_anonymous', 'is_reported'];
}
