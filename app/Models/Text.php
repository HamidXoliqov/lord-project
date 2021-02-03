<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Text extends Model
{
    protected $table = 'text';

    protected $fillable =[
    	'text',
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
        $post->save();
    }
    public function edit($filds)
    {
        $this->fill($filds);
        $this->save();
    }
	public static function getContent($slug)
	{
		$data = Text::where('slug',$slug)->first();
        if (!empty($data)){
            if (Auth::check() && Auth::user()->role == 'admin') {
                echo "<a class='create-content-text' href='".url('/admin-text/slug',$slug)."' target='_blank'>{$data->text}</a>";
            } else {
                return $data->text;
            }
        }else
        echo "Text not found";

	}
}
