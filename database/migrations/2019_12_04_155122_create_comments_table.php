<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('body');
            $table->timestamps();
            $table->bigInteger('user_id')
                  ->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

        });
        Schema::create('album_comment', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('comment_id')
                  ->unsigned();
            $table->foreign('comment_id')
                  ->references('id')
                  ->on('comments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->bigInteger('album_id')
                  ->unsigned();
            $table->foreign('album_id')
                  ->references('id')
                  ->on('albums')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamps();
        });

        Schema::create('comment_song', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('comment_id')
                  ->unsigned();
            $table->foreign('comment_id')
                  ->references('id')
                  ->on('comments')
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

        Schema::create('comment_musicvideo', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('comment_id')
                  ->unsigned();
            $table->foreign('comment_id')
                  ->references('id')
                  ->on('comments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->bigInteger('musicvideo_id')
                  ->unsigned();
            $table->foreign('musicvideo_id')
                  ->references('id')
                  ->on('musicvideos')
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
        Schema::dropIfExists('comments');
        Schema::dropIfExists('album_comment');
        Schema::dropIfExists('comment_song');
        Schema::dropIfExists('comment_musicvideo');
    }
}
