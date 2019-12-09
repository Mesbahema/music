<?php

use App\Models\Music\Artist;
use Illuminate\Database\Seeder;

/**
 * Class ArtistsTableSeeder
 * @mixin Artist
 */
class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artist = new Artist();
        $artist->setTranslation('nickname', 'en', 'Corey Talor')
               ->setTranslation('nickname', 'fa', 'کوری تیلور');
        $artist->biography = 'Such a bad ass guy';
        $artist->birthday = 1997-06-28;
        $artist->save();
    }
}
