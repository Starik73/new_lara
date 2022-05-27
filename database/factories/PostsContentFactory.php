<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\PostsContent;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostsContentFactory extends Factory
{
    protected $model = PostsContent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => Post::factory(),
            'lang_code' => 'en',
            'title' => $this->faker->word,
            'header' => $this->faker->sentence,
            'img_url' => $this->faker->sentence,
            'post_body' => $this->faker->sentences(5, true),
        ];
    }
}
