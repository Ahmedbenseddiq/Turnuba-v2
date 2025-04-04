<?php

namespace App\Services;

use App\Interfaces\barberShopInterface;
use Auth;

class barberShopService
{

    public $barberShopInterface;
    /**
     * Create a new class instance.
     */
    public function __construct(barberShopInterface $barberShopInterface)
    {
        $this->barberShopInterface = $barberShopInterface;
    }
  

    public function getMyBarberShops()
    {
        return $this->barberShopInterface->getMyBarberShops();
    }

    public function storeBarberShop($request)
    {
        
        $barberShop = [
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'type' => $request->type,
            'owner_id' => Auth::user()->owner()->first()->id,
        ];
        
        return $this->barberShopInterface->storeBarberShop($barberShop); 
  
    }

    public function showBarberShop ($barberShop)
    {
        return $this->barberShopInterface->showBarberShop($barberShop);
    }

    public function editBarberShop ($barberShop)
    {
        return $this->barberShopInterface->editBarberShop($barberShop);
    }


    public function updateBarberShop($request, $barberShop)
    {
        $barberShopData =  [
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'type' => $request->type,
        ];
        
        return $this->barberShopInterface->updateBarberShop($barberShopData, $barberShop);
    }
}
