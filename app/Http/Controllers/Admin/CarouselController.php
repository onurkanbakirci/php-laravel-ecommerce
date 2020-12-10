<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carousel;

class CarouselController extends Controller
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
        return view("partials.carousels")->with("carousels",Carousel::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("partials.addCarousel")->with("carousels",Carousel::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carousel = new Carousel();
        $carousel->title = $request->title;
        $carousel->src = $request->image->hashName();       

        if($request->hasFile("image")){
            $request->image->store("carouselImages","public");
        }
        
        if($carousel->save()){
            return redirect()->route('carousels.index');
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
        $carousel = Carousel::find($id);
        return view("partials.editCarousel")->with("carousel",$carousel);
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
        $carousel = Carousel::find($id);
        $carousel->title = $request->title;

        if($request->hasFile("image")){
            //delete old image and save new image
            unlink(storage_path('app/public/carouselImages/'. $carousel->src));
            $carousel->src=$request->image->hashName();
            $request->image->store("carouselImages","public");
        }
        
        if($carousel->save()){
            return redirect()->route('carousels.index');
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
        $carousel = Carousel::find($id);
        unlink(storage_path('app/public/carouselImages/'. $carousel->src));
        $carousel->delete();
        return redirect()->route('carousels.index');
    }
}
