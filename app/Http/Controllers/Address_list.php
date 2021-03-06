<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Address_list extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('adminlte::Address');
    }
}
