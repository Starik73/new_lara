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
            $table->foreignId('post_id')
                ->references('id')
                ->on('posts')
                ->cascadeOnDelete()
            ;
            $table->string('language_id')->default('ru');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('og_title')->default('Заголовок поста');
            $table->string('og_type')->default('article');
            $table->string('og_url')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_image_width')->default('1200');
            $table->string('og_image_height')->default('630');
            $table->string('og_description')->nullable();
            $table->string('og_site_name')->default('Блог astashenkov.ru о программировании HTML, CSS, JavaScript, PHP');
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
        Schema::dropIfExists('posts_meta_data');
    }
}
