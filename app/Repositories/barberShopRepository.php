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

    public function getMyBarberShops()
    {
        $owner = Auth::user()->owner()->first();

        if (!$owner) {
            throw new \Exception('No owner associated with the authenticated user.');
        }

        return BarberShop::where('owner_id', $owner->id)->get();
    }

    public function storeBarberShop($barberShop)
    {
        return BarberShop::create($barberShop);
    }

    public function showBarberShop($barberShop)
    {
        return $barberShop = BarberShop::findOrFail($barberShop);
    }


    public function editBarberShop($barberShop)
    {
        return $barberShop = BarberShop::findOrFail($barberShop);
    }


    public function updateBarberShop($request, $barberShop)
    {
        $barberShop = BarberShop::findOrFail($barberShop);

        $barberShop->update();

        return $barberShop;
    }

    public function destroyBarberShop($barberShop)
    {
        $barberShop = BarberShop::findOrFail($barberShop);

        return $barberShop->delete();
    }
}

