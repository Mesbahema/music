<?php

namespace App\Models\User;

use App\Models\Like\Like;
use App\Models\Music\Genre;
use App\Models\Like\Comment;
use App\Models\Like\History;
use App\Models\Like\Playlist;
use App\Models\Like\Subscribe;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
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
    /*-----------------------------Relations-----------------------*/

    public function profile()
    {
      return $this->hasOne(Profile::class);
    }


    public function subscribes()
    {
      return $this->hasMany(Subscribe::class);
    }


    public function likes()
    {
      return $this->hasMany(Like::class);
    }


    public function playlist()
    {
      return $this->hasMany(Playlist::class);
    }


    public function history()
    {
      return $this->hasOne(History::class);
    }


    public function comments()
    {
      return $this->hasMany(Comment::class);
    }


    public function genres()
    {
      return $this->belongsToMany(Genre::class);
    }
        // ------------------------------------ Attributes ------------------------------------
    public function setPasswordAttribute($password)
    {
      $this->attributes['password'] = bcrypt($password);
    }
}
