<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class Team extends Model
{
    protected $table = 'team';

    protected $fillable =[
    	'name',
    	'title',
    	'facebook',
    	'twitter',
    	'in',
    	'status',
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
    public static function add($filds,$images)
    {
        $post = new static;
        $post->fill($filds);
		$post->uploadeImage($images);
		
        $post->save();
    }
    public function edit($filds,$images)
    {
        $this->fill($filds); 
        $this->uploadeImage($images);
        $this->save();
    }
    public function uploadeImage($image)
    {
		if ($image == null) return;
		
        $fileNime = Str::random(10) . '.' . $image->extension();
        $image->storeAs('uploads/team/',$fileNime);
		$this->image = $fileNime;
        $this->save();
    }
    public function getImage()
    {
        if($this->image == null)
        {
            return '/public/themes/backend/image/default.png';
        }
        return '/public/uploads/team/' . $this->image;
    }
    public static function deleteImage($image)
    {
        if($image!='') {
            Storage::delete('/uploads/team/'.$image);
        }
    }
}
