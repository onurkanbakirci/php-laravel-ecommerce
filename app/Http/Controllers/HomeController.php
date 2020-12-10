<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home')->with("carousels",Carousel::get())
                            ->with("products",Product::inRandomOrder()->take(6)->get());
    }

    public function last_products(){
        return view("lastProducts")->with("products",Product::inRandomOrder()->take(6)->get());
    }

    public function opportunity(){
        return view("opportunity")->with("products",Product::inRandomOrder()->take(6)->get());
    }  

}
