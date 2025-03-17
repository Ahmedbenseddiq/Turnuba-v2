<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.dashboard');
    }

   
}
