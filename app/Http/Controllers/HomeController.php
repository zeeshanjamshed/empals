<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()->dob) {
            $empals = User::where('id', '!=', Auth::user()->id)->get();
            // $empals = User::all();
            return view('home', compact('empals'));
        } else {
            return redirect('/empal/complete-profile');
        }
    }
}
