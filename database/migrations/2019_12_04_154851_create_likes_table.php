<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('liked');

            $table->bigInteger('user_id')
                  ->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamps();
        });

        Schema::create('like_musicvideo', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('musicvideo_id')
                  ->unsigned();
            $table->foreign('musicvideo_id')
                  ->references('id')
                  ->on('musicvideos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->bigInteger('like_id')
                  ->unsigned();
            $table->foreign('like_id')
                  ->references('id')
                  ->on('likes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamps();
        });

        Schema::create('like_song', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('like_id')
                  ->unsigned();
            $table->foreign('like_id')
                  ->references('id')
                  ->on('likes')
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
        Schema::dropIfExists('likes');
        Schema::dropIfExists('like_musicvideo');
        Schema::dropIfExists('like_song');
    }
}
