<?php

namespace App\Models\Like;

use App\Models\User\User;
use App\Models\Music\Song;
use Illuminate\Database\Eloquent\Model;

/**
 * Class History
 *
 * @package App\Models\Like
 *
 * @property User   $user
 * @property Song[] $songs
 *
 */

class History extends Model
{
    /*-----------------------------Relations-----------------------*/


    public function user()
    {
      return $this->belongsTo(User::class);
    }


    public function songs()
    {
      return $this->belongsToMany(Song::class);
    }


}
