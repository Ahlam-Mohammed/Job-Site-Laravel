<?php

namespace Database\Factories;

use App\Enum\JobEnum;
use App\Enum\RoleEnum;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'job_title'          => $this->faker->title,
            'career_field'       => $this->faker->title,
            'description'        => $this->faker->paragraph,
            'type'               => JobEnum::TYPE_FULL_TIME,
            'is_active'          => $this->faker->boolean,
            'max_salary'         => $this->faker->numberBetween(5000, 9000),
            'min_salary'         => $this->faker->numberBetween(1, 5000),
            'professional_level' => JobEnum::LEVEL_MID,
            'skills'             => $this->faker->paragraph,
            'status'             => JobEnum::STATUS_UNDER_APPROVAL,
            'user_id'            => User::inRandomOrder()->role(RoleEnum::SUPER_ADMIN)->first()->id

        ];
    }
}
