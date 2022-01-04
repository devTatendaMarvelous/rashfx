<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketPlaceController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stock()
    {
        return view('marketplace.stock');   
    }
     public function crypto()
    {
        return view('marketplace.crypto');   
    }
  public function indices()
    {
        return view('marketplace.indices');   
    }

    public function cfd()
    {
        return view('marketplace.cfd');   
    }
    
    public function metatrade()
    {
        return view('marketplace.metatrade');   
    }
}
