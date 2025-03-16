<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    protected $fillable = [
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chair()
    {
        return $this->hasOne(Chair::class);
    }

    public function barberShop()
    {
        return $this->belongsTo(BarberShop::class);
    }
}
