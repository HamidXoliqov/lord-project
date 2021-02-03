<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carousel;
use App\models\Comment;
use App\Models\Template;
use App\Models\Pages;
use App\models\Partners;
use App\models\Process;
use App\models\Services;

class SiteController extends Controller
{
	public function index()
	{		
		$carousels = Carousel::where('status',1)->orderBy('time','DESC')->get();
		$services = Services::where('status',1)->orderBy('time','DESC')->get();
		$comments = Comment::where('status',1)->orderBy('time','DESC')->get();
		$partners = Partners::where('status',1)->orderBy('time','DESC')->get();
		$process = Process::where('status',1)->orderBy('time','DESC')->get();
	    return view('frontend.site.index',compact('carousels','services','comments','partners','process'));
	}
}
