<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resrvation extends Model
{
    protected $fillable = [
        'is_confirmed',
        'is_canceled',
        'is_done',
        'client_id',
        'chair_id',
    ];
}
