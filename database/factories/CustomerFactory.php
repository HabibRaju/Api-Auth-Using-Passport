<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $city = array("Dhaka,Bangladesh", "Kabul,Afghanistan", "London,England", "Paris, France");
        return [
                "first_name" => $this->faker->firstName(),
                "last_name" => $this->faker->lastName(),
                "phone" => $this->faker->phoneNumber,
                "email" => $this->faker->safeEmail,
                "age" => $this->faker->numberBetween(20, 50),
                "gender" => $this->faker->randomElement(["male", "female", "others"]),
                "address" => $city[$this->faker->numberBetween(0, 3)],
        ];
    }
}
