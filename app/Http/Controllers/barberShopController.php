<?php

namespace App\Http\Controllers;

use App\Interfaces\barberShopInterface;
use App\Models\BarberShop;
use Illuminate\Http\Request;

class barberShopController extends Controller
{
    private $barberShopInterface;

    public function __construct(barberShopInterface $barberShopInterface)
    {
        $this->barberShopInterface = $barberShopInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function getAll()
    {
        // $barberShops = $this->barberShopInterface->getAllBarberShops();

        // return view('barberShop.index', ['barberShops' => $barberShops]);
    }

    public function getMyBarberShops()
    {
        $barberShops = $this->barberShopInterface->getMyBarberShops();

        return view('barberShop.index', ['barberShops' => $barberShops]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barberShop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'type' => 'required', 'in:male,female, mixte'
        ]);
        // dd($request->all());

        $barberShop = $this->barberShopInterface->storeBarberShop($request);

        if($barberShop){
            return back()->with('success', 'BarberShop created successfully');
        }else{
            return back()->with('error', 'BarberShop creation failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(BarberShop $barberShop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarberShop $barberShop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BarberShop $barberShop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BarberShop $barberShop)
    {
        //
    }
}
