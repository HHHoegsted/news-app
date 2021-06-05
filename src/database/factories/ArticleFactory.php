<?php

namespace Database\Factories;

use App\Models\Article;
use Bluemmb\Faker\PicsumPhotosProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Article::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
	  $this->faker->addProvider(new PicsumPhotosProvider($this->faker));
		$img_seed = $this->faker->word();
		return [
			'title' => $this->faker->sentence(3),
			'body' => $this->faker->paragraph(50),
			'image_url' => $this->faker->imageUrl(640,480, $img_seed),
		];
	}
}
