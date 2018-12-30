<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reply extends Model
{
    use Notifiable;

    protected $fillable = ['to', 'from', 'message', 'reply'];

    protected $table='replys';
}
