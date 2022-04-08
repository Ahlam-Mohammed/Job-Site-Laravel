<?php

namespace Database\Factories;

use App\Enum\RoleEnum;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'     => $this->faker->name,
            'phone'    => $this->faker->phoneNumber,
            'email'    => $this->faker->email,
            'user_id'  => User::role(RoleEnum::COMPANY)->first()->id
        ];
    }
}
