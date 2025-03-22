<?php

namespace App\Interfaces;

interface barberShopInterface
{
    public function getAllBarberShops();
    public function getMyBarberShops();
    public function storeBarberShop($request);

    public function showBarberShop($barberShop);

    public function editBarberShop($barberShop);

    public function updateBarberShop($request, $barberShop);

    public function destroyBarberShop($barberShop);
}
