<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_stories', function (Blueprint $table) {
            $table->increments('story_id');
            $table->string('story_name');
            $table->integer('author_id') ->unsigned();
            $table->string('story_image');
            $table->text('story_intro');
            $table->integer('story_rating') ->unsigned();
            $table->integer('story_view') ->unsigned();
            $table->integer('story_sum_chapter') ->unsigned();
            $table->string('story_source');
            $table->string('story_status');
            $table->integer('story_price');
            $table->integer('update_id');
            $table->integer('flag');
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
        Schema::dropIfExists('list_stories');
    }
}
