<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Rock;

class ProductController extends Controller
{

    public function __construct(){
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("partials.products")->with("datas",Product::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("partials.addProduct")->with("categories",Category::get())->with("rocks",Rock::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->src = $request->image->hashName();
        $product->weight = $request->weight;
        $product->carat = $request->carat;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->category_id =$request->category_id;
        $product->model_id =$request->category_id;
        $product->style_id =$request->category_id;
        $product->status_id =$request->stock;
        $product->rock_id = $request->rock_id;

        if($request->hasFile("image")){
            $request->image->store("productImages","public");
        }
        
        if($product->save()){
            return redirect()->route('products.index');
        }else{
            return view("partials.error");
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
        $product = Product::find($id);
        return view("partials.editProduct")->with("product",$product)->with("categories",Category::get())->with("rocks",Rock::get());
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
        $product = Product::find($id);
        $product->name = $request->name;
        $product->rock = $request->rock;
        $product->weight = $request->weight;
        $product->carat = $request->carat;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->category_id =Category::find($request->category_id)->id;

        if($request->hasFile("image")){
            //delete old image and save new image
            unlink(storage_path('app/public/productImages/'. $product->src));
            $product->src=$request->image->hashName();
            $request->image->store("productImages","public");
        }
        
        if($product->save()){
            return redirect()->route('products.index');
        }else{
            return view("partials.error");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index');
    }
}
