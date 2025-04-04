<?php

namespace App\Http\Controllers;


use App\Models\BarberShop;
use App\Services\barberShopService;
use Illuminate\Http\Request;

class barberShopController extends Controller
{
    private $barberShopService;

    public function __construct(barberShopService $barberShopService)
    {
        $this->barberShopService = $barberShopService;
    }

    /**
     * Display a listing of the resource.
     */
    // public function getAll()
    // {
    //     $barberShops = $this->barberShopInterface->getAllBarberShops();

    //      return view('barberShop.index', ['barberShops' => $barberShops]);
    // }

    public function getMyBarberShops()
    {
        $barberShops = $this->barberShopService->getMyBarberShops();

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

        $barberShop = $this->barberShopService->storeBarberShop($request);
        // dd($request->all());

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
        $barberShop = $this->barberShopService->showBarberShop($barberShop->id);
        if ($barberShop) {
            return view('barberShop.show', ['barberShop' => $barberShop]);
        }else {
            return back()->with('error', 'Can not found this barber shop');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarberShop $barberShop)
    {
        // dd(vars: $barberShop);
        $barberShop = $this->barberShopService->editBarberShop($barberShop->id);
        // dd($barberShop);
        return view('barberShop.edit', ['barberShop' => $barberShop]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BarberShop $barberShop)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'type' => 'required', 'in:male,female, mixte'
        ]);

        $barberShop = $this->barberShopService->updateBarberShop($request, $barberShop->id);

        if($barberShop){
            return to_route('barberShop.index')->with('success', 'BarberShop updated successfully');
        }else{
            return back()->with('error', 'BarberShop update failed');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BarberShop $barberShop)
    {
        $barberShop = $this->barberShopInterface->destroyBarberShop($barberShop->id);

        if($barberShop){
            return to_route('barberShop.index')->with('success', 'BarberShop deleted successfully');
        }else{
            return to_route('barberShop.index')->with('error', 'BarberShop deletion failed');
        }
    }
}
