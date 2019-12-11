<?php

namespace App\Http\Controllers\panel\Music;

use App\Http\Controllers\Controller;
use App\Http\Requests\panel\Music\Song\StoreSongRequest;
use App\Http\Resources\panel\Music\Song\SongIndexResource;
use App\Models\Music\File;
use App\Models\Music\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $song = Song::paginate();

        return SongIndexResource::collection($song);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function store(StoreSongRequest $request)
    {
        $path = $request->file('music')->store('public/songs');
        $song = new Song();
        $file = File::created($path);
        $translations = $request->name;

        $song->setTranslations('name', $translations);
        $song->fill($request->except('file'));
        $song->album()->associate($request->album_id);
        $song->save();
        return [
            'success' => true,
            'message' => __('responses.Music.Artist.store', ['name' => $song->name]),
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return new SongIndexResource($song);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Music\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Music\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        //
    }
}
