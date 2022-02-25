<?php

namespace Database\Factories;

use App\Models\Offertype;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'offertype_id' => Offertype::all()->random()->id,
            'postcode' => $this->faker->postcode,
            'county' => $this->faker->country,
            'offerEndsAt' => Carbon::now()->addDays(rand(10, 500)),
            'description' => $this->faker->text(rand(50,300))
        ];
    }
}
