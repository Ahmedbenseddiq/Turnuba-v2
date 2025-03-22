<?php

namespace App\Interfaces;

interface barberShopInterface
{
    public function getAllBarberShops();
    public function getMyBarberShops();
    public function storeBarberShop($request);
}
