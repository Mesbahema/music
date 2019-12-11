<?php

namespace App\Models\Music;

use App\Models\Like\Like;
use App\Models\Like\Playlist;
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
 * @property string $lyrics
 * @property string $duration
 *
 * @property Genre[]     $genres
 * @property Musicvideo  $musicvideo
 * @property Category[]  $categories
 * @property Artist[]    $artist
 * @property Like[]      $likes
 * @property Playlist[]  $playlists
 * @property History[]   $histories
 * @property Album       $albums
 * @property Comment     $comments
 * @property File[]      $files
 *
 */

class Song extends Model
{
    protected $fillable = [
        'name', 'lyrics', 'duration',
    ];
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

    public function files()
    {
        return $this->belongsToMany(File::class);
    }
}
