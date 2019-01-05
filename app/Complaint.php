<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Complaint extends Model
{
    use Notifiable;
    protected $fillable = ['user', 'complaint', 'guidance', 'slug', 'report'];

}
