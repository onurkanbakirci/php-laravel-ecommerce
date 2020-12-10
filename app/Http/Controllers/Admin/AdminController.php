<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use App\Models\Order;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    

    public function index()
    {
        return view('admin')->with("userCount",User::get()->count())
                            ->with("orderCount",Order::get()->count());
    }

    public function showLoginForm(){
        return view("partials.admin-login");
    }

    public function login(){
        return true; 
    }
}
