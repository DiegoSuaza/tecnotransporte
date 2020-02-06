<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use App\companies;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $company = companies::count();
        $employee = employees::count();
        return view('home', compact('company', 'employee'));
    }
}
