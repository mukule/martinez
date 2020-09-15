<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardordersController extends Controller
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

    
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('orders')->with('orders', $user->orders);
       
    }
}
