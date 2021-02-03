<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Process extends Model
{
    protected $table = 'process';

    protected $fillable =[
    	'title',
    	'short',
    	'text',
    	'image',
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
        $image->storeAs('uploads/process/',$fileNime);
        $this->image = $fileNime;
        $this->save();
    }
    public function getImage()
    {
        if($this->image == null)
        {
            return '/public/themes/backend/image/default.png';
        }
        return '/public/uploads/process/' . $this->image;
    }
    public static function deleteImage($image)
    {
        if($image!='') {
            Storage::delete('/uploads/process/'.$image);
        }
    }
}
