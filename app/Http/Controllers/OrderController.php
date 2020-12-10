<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\City;
use App\Models\District;
use App\Models\Order;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('cart') and count(Session::get('cart'))>0){
            $total=0;
            foreach (Session::get('cart') as $card=>$value) 
            {
                $total+=$value['price']*$value['qty'];          
            }
            return view("order")->with("totalPrice",$total)->with("cities",City::get())->with("districts",District::get());
        }
        else{
            return redirect()->route('home');
        }
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
        if(Session::has('order') and count(Session::get('order')) > 0)
        {
            Session::forget('order');
        }

        $validateInputs = $request->validate([
            //delivery inf
            "delivery_name"=>"required",
            "delivery_lastname"=>"required",
            "delivery_e_mail"=>"required",
            "delivery_phoneNumber"=>"required",
            "delivery_zip_code"=>"required",
            "delivery_city"=>"required",
            "delivery_district"=>"required",
            "delivery_address"=>"required",
            //invoice inf
            "invoice_name"=>"required",
            "invoice_lastname"=>"required",
            "invoice_e_mail"=>"required",
            "invoice_phoneNumber"=>"required",
            "invoice_zip_code"=>"required",
            "invoice_city"=>"required",
            "invoice_district"=>"required",
            "invoice_address"=>"required",
        ]);
        if($validateInputs){
            $order = Session::get('order');

            $order[] = array(
                "delivery_name" => $request->delivery_name,
                "delivery_lastname" => $request->delivery_lastname,
                "delivery_e_mail"=> $request->delivery_e_mail,
                "delivery_phoneNumber" => $request->delivery_phoneNumber,
                "delivery_zip_code" => $request->delivery_zip_code,
                "delivery_city" => $request->delivery_city,
                "delivery_district" => $request->delivery_district,
                "delivery_address" => $request->delivery_address,
    
                "invoice_name" => $request->invoice_name,
                "invoice_lastname" => $request->invoice_lastname,
                "invoice_e_mail" => $request->invoice_e_mail,
                "invoice_phoneNumber" => $request->invoice_phoneNumber,
                "invoice_zip_code" => $request->invoice_zip_code,
                "invoice_city" => $request->invoice_city,
                "invoice_district" => $request->invoice_district,
                "invoice_address" => $request->invoice_address,
            );

            Session::put('order', $order);

            return redirect()->route('payment.index');
        }

        else{
            return view("error");
        }
        
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
        //
    }
}
