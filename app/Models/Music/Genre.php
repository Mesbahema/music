<?php

namespace App\Models\Music;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * Class Genre
 *
 * @package App\Models\Music
 *
 * @property Song[] $songs
 * @property User[] $users
 *
 */
class Genre extends Model
{
    /*-----------------------------Translations-----------------------*/
    use HasTranslations;
    public $translatable = ['name'];
    /*-----------------------------Relations-----------------------*/

    public function users()
    {
      return $this->belongsToMany(User::class);
    }

    public function songs()
    {
      return $this->belongsToMany(Song::class);
    }
}
