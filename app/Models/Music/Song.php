<?php

namespace App\Models\Music;

use App\Models\Like\Like;
use App\Models\Music\Album;
use App\Models\Like\Comment;
use App\Models\Like\History;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * Class Song
 *
 * @package App\Models\Music
 *
 * @property string $name
 * @property string $file_path
 * @property string $lyrics
 * @property string $duration
 *
 * @property Genres[]    $genres
 * @property Musicvideo  $musicvideo
 * @property Category[]  $categories
 * @property Artists[]   $artist
 * @property Likes[]     $likes
 * @property Playlists[] $playlists
 * @property History[]   $histories
 * @property Album       $albums
 * @property Comment     $comments
 *
 */

class Song extends Model
{
    /*-----------------------------Translations-----------------------*/
    use HasTranslations;
    public $translatable = ['name'];
    /*-----------------------------Relations-----------------------*/

    public function genres()
    {
      return $this->belongsToMany(Genre::class);
    }

    public function musicvideo()
    {
      return $this->hasOne(Musicvideo::class);
    }


    public function categories()
    {
      return $this->belongsToMany(Category::class);
    }


    public function artists()
    {
      return $this->belongsToMany(Artist::class);
    }

    public function likes()
    {
      return $this->belongsToMany(Like::class);
    }

    public function playlists()
    {
      return $this->hasMany(Playlist::class);
    }


    public function histories()
    {
      return $this->belongsToMany(History::class);
    }


    public function album()
    {
      return $this->belongsTo(Album::class);
    }


    public function comments()
    {
      return $this->belongsToMany(Comment::class);
    }
}
