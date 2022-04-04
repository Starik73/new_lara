<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsMetaDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_meta_data', function (Blueprint $table) {
            $table->string('post_id')->unique();
            $table->string('language_id')->default('ru');
            $table->string('keywords');
            $table->string('description');
            $table->string('og_title')->default('Заголовок поста');
            $table->string('og_type')->default('article');
            $table->string('og_url')->nullable();
            $table->string('og_image');
            $table->string('og_image_width')->default('1200');
            $table->string('og_image_height')->default('630');
            $table->string('og_description');
            $table->string('og_site_name')->default('Блог astashenkov.ru о программировании HTML, CSS, JavaScript, PHP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_meta_data');
    }
}
