<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\models\Services;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_count = Settings::getValue('admin_pagination');
        $services = Services::orderBy('time','DESC')->paginate($page_count);
        return view('backend.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        return view('backend.service.create',compact('user_id'));   
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
            'icon'  => 'required',
        ]);
        Services::add($request->all());
        return redirect()->route('admin-service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Services::find($id);
        return view('backend.service.view',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::find($id);
        $user_id = $service->user_id;
        return view('backend.service.edit',compact('service','user_id'));
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

        $service = Services::find($id);
        if ($request->file('icon')){

            Services::deleteImage($service->icon);
        }
        $service->edit($request->all());
        return redirect()->route('admin-service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Services::find($id);
        if($service->delete())
        {
            Services::deleteImage($service->icon);
            return back();
        } 
    }
}
