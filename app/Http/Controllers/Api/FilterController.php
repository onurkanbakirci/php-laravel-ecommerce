<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filter;

class FilterController extends Controller
{
    public function filter(){
        return response()->json(Filter::get(),200);
    }
}
