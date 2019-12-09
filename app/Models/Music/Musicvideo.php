<?php

namespace App\Models\Music;

use App\Models\Like\Like;
use App\Models\Like\Comment;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Musicvideo
 *
 * @package App\Models\Music
 *
 * @property string    $file_path
 * @property Song      $song
 * @property Like[]    $like
 * @property Comment[] $comments
 *
 */

class Musicvideo extends Model
{

    /*-----------------------------Relations-----------------------*/
    public function song()
    {
      return $this->belongsTo(Song::class);
    }

    public function likes()
    {
      return $this->belongsToMany(Like::class);
    }

    public function comments()
    {
      return $this->belongsToMany(Comment::class);
    }
}
