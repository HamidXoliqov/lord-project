<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\models\Comment;
use App\models\Partners;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_count = Settings::getValue('admin_pagination');
        $partners = Partners::orderBy('time','DESC')->paginate($page_count);
        return view('backend.partners.index',compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        return view('backend.partners.create',compact('user_id'));
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
            'image'  => 'required',
        ]);
        Partners::add($request->all(), $request->file('image'));
        return redirect()->route('admin-partners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partner = Partners::find($id);
        return view('backend.partners.view',compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partners::find($id);
        $user_id = $partner->user_id;
        return view('backend.partners.edit',compact('partner','user_id'));
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
//            'image'  => 'required',
        ]);

        $partner= Partners::find($id);
        if ($request->file('image')){

            Partners::deleteImage($partner->image);
        }
        $partner->edit($request->all(), $request->file('image'));
        return redirect()->route('admin-partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partners::find($id);
        if($partner->delete())
        {
            Comment::deleteImage($partner->image);
            return back();
        }
    }
}
