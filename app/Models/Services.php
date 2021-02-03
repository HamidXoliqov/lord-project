<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'sevices';

    protected $fillable =[
    	'title',
    	'short',
    	'icon',
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
}
