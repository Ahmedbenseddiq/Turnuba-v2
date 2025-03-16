<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
    protected $fillable = [
        'number',
        'is_occupied',
        'avg_time',
        'barber_id',
        'barbershop_id',
    ];
}
