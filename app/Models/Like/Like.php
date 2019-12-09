<?php

namespace App\Models\Like;

use App\Models\User\User;
use App\Models\Music\Musicvideo;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Like
 *
 * @package App\Models\Like
 *
 * @property boolean      $liked
 * @property User         $user
 * @property Song[]       $songs
 * @property Musicvideo[] $musicvideos
 *
 */

class Like extends Model
{
    /*-----------------------------Relations-----------------------*/


    public function user()
    {
      return $this->belongsTo(User::class);
    }


    public function songs()
    {
      return $this->belongsToMany(Songs::class);
    }


    public function musicvideos()
    {
      return $this->belongsToMany(Musicvideo::class);
    }
}
