<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\models\Carousel;
use App\models\Process;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_count = Settings::getValue('admin_pagination');
        $carousels = Carousel::orderBy('time','DESC')->paginate($page_count);
        return view('backend.carousel.index',compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        return view('backend.carousel.create',compact('user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>  'required|min:3',
            'short' =>  'required|min:5',
            'image'  => 'required',
        ]);
        Carousel::add($request->all(), $request->file('image'));
        return redirect()->route('admin-carousel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carousel = Carousel::find($id);
        return view('backend.carousel.view',compact('carousel'));
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
        $user_id = $carousel->user_id;
        return view('backend.carousel.edit',compact('carousel','user_id'));
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
        $request->validate([
            'title' =>  'required|min:3',
            'short' =>  'required|min:5',
        ]);

        $carousel = Carousel::find($id);
        if ($request->file('image')){

            Carousel::deleteImage($carousel->image);
        }
        $carousel->edit($request->all(), $request->file('image'));
        return redirect()->route('admin-carousel.index');
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
        if($carousel->delete())
        {
            Carousel::deleteImage($carousel->image);
            return back();
        }
    }
}
