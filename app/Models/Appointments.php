<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointments extends Model
{
    use HasFactory;

    use Notifiable;

    protected $table = 'appointments';

    protected $fillable = [

        'last_name',
        'first_name',
        'email',
        'phone',
        'date',
        'time',
        'message',
        'status',
        'user_id',
    ];
}
