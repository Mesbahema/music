<?php

namespace App\Models\Like;

use App\Models\User\User;
use App\Models\Music\Song;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Platlist
 *
 * @package App\Models\Like
 *
 * @property User $user
 * @property Song $song
 *
 */

class Playlist extends Model
{
    /*-----------------------------Relations-----------------------*/

    public function user()
    {
      return $this->belongsTo(User::class);
    }


    public function song()
    {
      return $this->belongsTo(Song::class);
    }
}
