<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactPageInformation>
 */
class ContactPageInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>fake()->title(),
            'email' =>fake()->email(),
            'email2' =>fake()->email(),
            'phone' =>fake()->phoneNumber(),
            'phone2' =>fake()->phoneNumber(),
            'location' =>fake()->address(),
        ];
    }
}
