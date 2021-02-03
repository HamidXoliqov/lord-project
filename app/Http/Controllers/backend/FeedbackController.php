<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\models\Feedback;
use App\Models\Settings;
use App\models\Telegram;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_count = Settings::getValue('admin_pagination');
        $feedbacks = Feedback::orderBy('time','DESC')->paginate($page_count);
        return view('backend.feedback.index',compact('feedbacks'));
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
        $request->validate([
            'full_name' =>  'required|min:3',
            'phone'  => 'required|min:9|max:13',
            'email'  => 'required|email',
            'text'  => 'required',
        ]);

        Telegram::send($request->all()['full_name'], $request->all()['phone']);
        Feedback::add($request->all());

        return redirect()->route('contact.index');
    }

    public function send(Request $request)
    {
        $request->validate([
            'full_name' =>  'required|min:3',
            'phone'  => 'required|min:9|max:13',
        ]);

        Telegram::send($request->all()['full_name'], $request->all()['phone']);

        return back();

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedback = Feedback::find($id);
        $feedback->status = 1;
        $feedback->save();
        return view('backend.feedback.view',compact('feedback'));
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
