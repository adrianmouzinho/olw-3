<?php

namespace Database\Factories;

use App\Models\Feature;
use App\Models\Sku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FeatureSku>
 */
class FeatureSkuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'feature_id' => Feature::inRandomOrder()->first()->id,
            'sku_id' => Sku::inRandomOrder()->first()->id,
            'value' => $this->faker->word(),
        ];
    }
}
