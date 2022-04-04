<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_contents', function (Blueprint $table) {
            $table->string('post_id')->unique();
            $table->string('language_id')->default('ru');
            $table->string('title');
            $table->string('header');
            $table->string('img_url');
            $table->text('post_body')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_contents');
    }
}
