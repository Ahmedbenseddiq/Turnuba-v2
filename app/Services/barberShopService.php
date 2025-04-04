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
        
        $barberShop = $this->FormData($request);
        
        return $this->barberShopInterface->storeBarberShop($barberShop); 
  
    }

    public function FormData($request)
    {
        return [
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'type' => $request->type,
            'owner_id' => Auth::user()->owner()->first()->id,
        ];
    }

    public function showBarberShop ($barberShop)
    {
        return $this->barberShopInterface->showBarberShop($barberShop);
    }
}
