<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total=0;
        if(Session::get('cart')){
            foreach (Session::get('cart') as $card=>$value) 
            {
                $total+=$value['price']*$value['qty'];          
            }
            return view("card")->with("totalPrice",$total);
        }
        return view("card");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::find($request->id);
        $cart = Session::get('cart');
        $cart[] = array(
            "id" => $product->id,
            "product_name" => $product->name,
            "src"=> $product->src,
            "price" => $product->price,
            "qty" => 1,
        );
        Session::put('cart', $cart);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Session::has('cart'))
        {
            foreach (Session::get('cart') as $card=>$value) 
            {
         
                if (''.$id.'' == $value['id'])
                {
                    Session::pull('cart.'.$card);
                    break;
                }
                
            }
        }
        return redirect()->back();
    }
}
