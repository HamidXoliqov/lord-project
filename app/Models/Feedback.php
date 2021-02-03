<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable =[
    	'full_name',
    	'phone',
    	'email',
    	'text',
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
