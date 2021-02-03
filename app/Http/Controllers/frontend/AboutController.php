<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\models\Team;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::orderBy('time','DESC')->get();
        $teams = Team::orderBy('time','DESC')->get();
        return view('frontend.about.pages',compact('abouts','teams'));
    }


}
