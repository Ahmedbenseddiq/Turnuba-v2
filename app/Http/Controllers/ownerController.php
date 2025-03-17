<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class ownerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('owner.dashboard');
    }

}
