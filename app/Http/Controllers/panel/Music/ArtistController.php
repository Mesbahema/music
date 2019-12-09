<?php

namespace App\Http\Controllers\panel\Music;

use App\Http\Controllers\Controller;
use App\Http\Requests\panel\Music\Artist\StoreArtistRequest;
use App\Http\Resources\panel\Music\Artist\ShowArtistResource;
use App\Models\Music\Artist;
use Illuminate\Http\Request;
use App\Http\Resources\panel\Music\Artist\ArtistIndexResource;

/**
 * Class ArtistController
 *
 * @package App\Http\Controllers\Music
 * @mixin Artist
 */

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $artist = Artist::paginate();

        return ArtistIndexResource::collection($artist);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function store(StoreArtistRequest $request)
    {
        $artist = new Artist();
        $translations = $request->name;

        $artist->setTranslations('nickname', $translations);
        $artist->fill($request->all());
        $artist->save();
        return [
            'success' => true,
            'message' => __('responses.Music.Artist.store', ['name' => $artist->nickname]),
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music\Artist  $artist
     *
     * @return ShowArtistResource
     */
    public function show(Artist $artist)
    {
        return new ShowArtistResource($artist);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Music\Artist  $artist
     *
     * @return array
     */
    public function update(StoreArtistRequest $request, Artist $artist)
    {
        $translations = $request->name;

        $artist->setTranslations('nickname', $translations);
        $artist->fill($request->all());
        $artist->save();
        return [
            'success' => true,
            'message' => __('responses.Music.Artist.change_status', ['name' => $artist->nickname]),
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Music\Artist  $artist
     *
     * @return array
     */
    public function destroy(Artist $artist)
    {
        $nickname = $artist->nickname;
        $artist->delete();
        return [
            'success' => true,
            'message' => __('responses.Music.Artist.destroy' , ['name' => $artist->nickname]),
        ];
    }

    public function restore($id)
    {

        $artist = Artist::onlyTrashed()->findOrfail($id)->restore();
        $artist = Artist::findOrfail($id);
        return [
            'success' => true,
            'message' => __('responses.Music.Artist.restore', ['name' => $artist->nickname]),
        ];
    }
}
