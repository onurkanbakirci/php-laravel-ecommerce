<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\City;
use App\Models\District;
use App\Models\Order;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::get('order')){
            $total=0;
            foreach (Session::get('cart') as $card=>$value) 
            {
                $total+=$value['price']*$value['qty'];          
            }
            return view("payment")->with("totalPrice",$total);
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
        $inpValidation = $request->validate([
            "card_name"=>"required|string",
            "card_number"=>"required|min:16|max:16|integer",
            "card_last_mounth"=>"required|integer",
            "card_last_year"=>"required|integer",
            "card_cvc"=>"required|integer",
            "contract"=>"required|accepted"
        ]);

        if($inpValidation){
            if (Session::has('order'))
            {
                $order_ss = Session::get('order');
                $order = new Order();
                
                $order->order_id=6531;

                $order->shipping_first_name = $order_ss->delivery_name;
                $order->shipping_last_name = $order_ss->delivery_lastname;
                $order->shipping_email = $order_ss->delivery_e_mail;
                $order->shipping_phone_number = $order_ss->delivery_phoneNumber;
                $order->delivery_zip_code = $order_ss->delivery_zip_code;
                $order->shipping_country = 1;
                $order->shipping_state = $order_ss->delivery_district;
                $order->shipping_city = $order_ss->delivery_city;
                $order->shipping_address = $order_ss->delivery_address;

                $order->billing_first_name = $order_ss->invoice_name;
                $order->billing_last_name = $order_ss->invoice_lastname;
                $order->billing_email = $order_ss->invoice_e_mail;
                $order->billing_phone_number = $order_ss->invoice_phoneNumber;
                $order->invoice_zip_code = $order_ss->invoice_zip_code;
                $order->billing_country = 1;
                $order->billing_state = $order_ss->invoice_district;
                $order->billing_city = $order_ss->invoice_city;
                $order->billing_address = $order_ss->invoice_address;

                if($order->save()){
                    return view('payment');
                }else{
                    return view("partials.error");
                }
                
            }
            else{
                return view("card");
            }     
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
