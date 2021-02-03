<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static function add($filds)
    {

        $post = new static;
        $post->fill($filds);
        $post->password = Hash::make($filds['password']);
        $post->role = ($filds['role']==null||$filds['role']=='user')?'user':'admin';
        $post->save();
    }
    public function edit($filds)
    {
        $this->fill($filds);
        $this->password = Hash::make($filds['password']);
        $this->role = ($filds['role']==null||$filds['role']=='user')?'user':'admin';
        $this->save();
    }
    public static function name($id)
    {
        $user = 'Remove user';
        if(!empty(User::find($id))){
            $user = User::find($id)->name;
        }
        return $user;
    }
}
