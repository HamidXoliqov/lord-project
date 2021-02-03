<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Settings;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_count = Settings::getValue('admin_pagination');
        $users = User::orderBy('created_at', 'desc')->paginate($page_count);
        return view('backend.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = ['user'=>'User','admin'=>'Admin'];
        return view('backend.user.create',compact('role'));
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
         $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        else{
            User::add($request->all());
        }
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(is_numeric($id)&&!empty(User::find($id)))
        {
            $user = User::find($id);
            return view('backend.user.view',compact('user'));
        }
        return redirect()->route('admin-users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(is_numeric($id)&&!empty(User::find($id)))
        {
            $user = User::find($id);
            $rol_val = $user->role;
            $role = ['user'=>'User','admin'=>'Admin'];
            return view('backend.user.edit',compact('user','role','rol_val'));
        }
        return redirect()->route('admin-users.index');
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
        if(is_numeric($id)&&!empty(User::find($id)))
        {
            $user = User::find($id);
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:50'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            if ($request->file('image')){
                User::deleteImage($user->image);
            }
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator);
            }
            else{
                $user->edit($request->all(),$request->file('image'));
            }
        }
        return redirect()->route('admin-users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->delete())
        {
            User::deleteImage($user->image);
            return back();
        }
    }

    public function profile($id)
    {
        if(is_numeric($id)&&!empty(User::find($id)))
        {
            $user = User::find($id);
            return view('backend.user.profile',compact('user'));
        }
        return redirect()->route('user.index');
    }
    public function status($id)
    {
        if (Auth::id()!=$id) {
            $user = User::find($id);
            if($user->status ==1)
            {
                $user->status = 0;
            }
            else
            {
                $user->status = 1;
            }
            if($user->save()){
                echo json_encode('success');
            }
            else{
                echo json_encode('error');
            }
        }
        else{
            echo json_encode('error');
        }
    }
}
