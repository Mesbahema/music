<?php

namespace App\Models\Like;

use App\Models\User\User;
use App\Models\Music\Song;
use App\Models\Music\Album;
use App\Models\Music\Musicvideo;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 *
 * @package App\Models\Like
 *
 * @property User         $user
 * @property Album[]      $albums
 * @property Song[]       $songs
 * @property Musicvideo[] $musicvideos
 *
 */
class Comment extends Model
{
    /*-----------------------------Relations-----------------------*/

    public function user()
    {
      return $this->belongsTo(User::class);
    }


    public function albums()
    {
      return $this->belongsToMany(Album::class);
    }


    public function songs()
    {
      return $this->belongsToMany(Song::class);
    }


    public function musicvideos()
    {
      return $this->belongsToMany(Musicvideo::class);
    }

}
