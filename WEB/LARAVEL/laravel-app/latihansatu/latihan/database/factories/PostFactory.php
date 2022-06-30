<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            //'body' => '<p>'.implode('</p><p>',$this->faker->paragraphs(mt_rand(5,10))).'</p>', //<-- explode, untuk menggabungkan

            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''), //<-- jadi setiap paragraf dibungkus pake tag p
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,2)
        ];
    }
}
//dengan paragraphs , itu akan mengembalikan nilai array, berbeda dengan paragraph yang semua nya menajdi satu kalimat, namun tersusun atas beberapa kata. Jadi <p> akan di explode dengan </p> dan <p> ditengahnya terdapat paragraph
