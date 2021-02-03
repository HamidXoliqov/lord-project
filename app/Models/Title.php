<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
// use App\Models\About;

class Title extends Model
{
    protected $table = 'title';

    protected $fillable =[
    	'title',
    	'slug',
    	'time',
    	'user_id',
	];

	public static function boot()
    {
        parent::boot();
        self::creating(function ($model){
           $model->time = time();
        });
    }
    public static function add($filds)
    {
        $post = new static;
        $post->fill($filds);
        // dd($images);

        $post->save();
    }
    public function edit($filds)
    {
        $this->fill($filds);
        $this->save();
    }
	public static function getContent($slug)
	{
		$data = Title::where('slug',$slug)->first();
        if (!empty($data)){
            if (Auth::check() && Auth::user()->role == 'admin') {
                echo "<a class='create-content-title' href='".url('/admin-title/slug',$slug)."' target='_blank'>{$data->title}</a>";
            } else {
                return $data->title;
            }
        }else
        echo "Title not found";
    }
}
