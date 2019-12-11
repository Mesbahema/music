<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('name');
            $table->string('duration');
            $table->string('file_path', 1000);
            $table->text('lyrics')->nullable();

            $table->bigInteger('album_id')
                  ->unsigned();
            $table->foreign('album_id')
                  ->references('id')
                  ->on('albums')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamps();
        });

        Schema::create('artist_song', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('artist_id')
                  ->unsigned();
            $table->foreign('artist_id')
                  ->references('id')
                  ->on('artists')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->bigInteger('song_id')
                  ->unsigned();
            $table->foreign('song_id')
                  ->references('id')
                  ->on('songs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamps();
        });

        Schema::create('category_song', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('category_id')
                  ->unsigned();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->bigInteger('song_id')
                  ->unsigned();
            $table->foreign('song_id')
                  ->references('id')
                  ->on('songs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamps();
        });

        Schema::create('genre_song', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('genre_id')
                  ->unsigned();
            $table->foreign('genre_id')
                  ->references('id')
                  ->on('genres')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->bigInteger('song_id')
                  ->unsigned();
            $table->foreign('song_id')
                  ->references('id')
                  ->on('songs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
        Schema::dropIfExists('artist_song');
        Schema::dropIfExists('category_song');
        Schema::dropIfExists('genre_song');
    }
}
