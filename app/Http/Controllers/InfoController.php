<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function distance_sales_construct(){
        return view("distanceSalesConstruct");
    }
    public function about_us(){
        return view("aboutUs");
    }
    public function return_product(){
        return view("returnProduct");
    }
}
