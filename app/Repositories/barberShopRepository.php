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

    public function storeBarberShop($request)
    {
        $owner = Auth::user()->owner()->first();

        if (!$owner) {
            throw new \Exception('No owner associated with the authenticated user.');
        }
        // // dd($owner);
        return BarberShop::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'type' => $request->type,
            'owner_id' => $owner->id,
        ]);
    }
}

