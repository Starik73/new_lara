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
            $table->foreignId('post_id')
                ->references('id')
                ->on('posts')
                ->cascadeOnDelete()
            ;
            $table->string('language_id')->default('ru');
            $table->string('title')->nullable();
            $table->string('header')->nullable();
            $table->string('img_url')->nullable();
            $table->text('post_body')->nullable();
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
        Schema::dropIfExists('posts_contents');
    }
}
