<?php

namespace App\Models\Music;


use App\Models\Like\Comment;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * Class Album
 *
 * @package App\Models\Music
 *
 * @property string $name
 * @property Song[] $songs
 * @property Comment $comments
 *
 */

class Album extends Model
{
    /*-----------------------------Translations-----------------------*/
    use HasTranslations;
    public $translatable = ['name'];

    /*-----------------------------Relations-----------------------*/


    public function songs()
    {
      return $this->hasMany(Song::class);
    }

    public function comments()
    {
      return $this->belongsToMany(Comment::class);
    }
}
