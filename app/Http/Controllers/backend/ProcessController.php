<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\models\About;
use App\models\Partners;
use App\models\Process;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_count = Settings::getValue('admin_pagination');
        $process = Process::orderBy('time','DESC')->paginate($page_count);
        return view('backend.process.index',compact('process'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        return view('backend.process.create',compact('user_id'));
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
            'image'  => 'required',
        ]);
        Process::add($request->all(), $request->file('image'));
        return redirect()->route('admin-process.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $process = Process::find($id);
        return view('backend.process.view',compact('process'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $process = Process::find($id);
        $user_id = $process->user_id;
        return view('backend.process.edit',compact('process','user_id'));
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
        ]);

        $process = Process::find($id);
        if ($request->file('image')){

            Process::deleteImage($process->image);
        }
        $process->edit($request->all(), $request->file('image'));
        return redirect()->route('admin-process.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $process = Process::find($id);
        if($process->delete())
        {
            Process::deleteImage($process->image);
            return back();
        }
    }
}
