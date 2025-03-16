<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'is_confirmed',
        'is_canceled',
        'is_done',
        'client_id',
        'chair_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function chair()
    {
        return $this->belongsTo(Chair::class);
    }
}
