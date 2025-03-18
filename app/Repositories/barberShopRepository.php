<?php

namespace App\Repositories;
use App\Interfaces\barberShopInterface;
use App\Models\BarberShop;
use Auth;

class barberShopRepository implements barberShopInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllBarberShops()
    {
        return BarberShop::all();
    }
}

