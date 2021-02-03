<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

// use App\Models\About;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $abouts = About::orderBy('time','DESC')->get();
        return view('frontend.contact.index');
    }


}
