<?php

namespace App\Models\Like;

use App\Models\User\User;
use App\Models\Music\Artist;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Subcribe
 *
 * @package App\Models\Like
 *
 * @property User   $user
 * @property Artist $artist
 *
 */

class Subscribe extends Model
{
    /*-----------------------------Relations-----------------------*/

    public function user()
    {
      return $this->belongsTo(User::class);
    }


    public function artist()
    {
      return $this->belongsTo(Artist::class);
    }
}
