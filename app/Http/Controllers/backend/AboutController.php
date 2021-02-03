<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\About;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_count = Settings::getValue('admin_pagination');
        $abouts = About::orderBy('time','DESC')->paginate($page_count);
        return view('backend.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        return view('backend.about.create',compact('user_id'));   
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
            'short'  => 'required|min:5',
            'image'  => 'required',
        ]);
        About::add($request->all(), $request->file('image'));
        return redirect()->route('admin-about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = About::find($id);
        return view('backend.about.view',compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        $user_id = $about->user_id;
        return view('backend.about.edit',compact('about','user_id'));
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
            'short'  => 'required|min:5'
        ]);

        $about = About::find($id);
        if ($request->file('image')){

            About::deleteImage($about->image);
        }
        $about->edit($request->all(), $request->file('image'));
        return redirect()->route('admin-about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        if($about->delete())
        {
            About::deleteImage($about->image);
            return back();
        } 
    }
}
