<?php

namespace Database\Factories\Role;

use App\Models\Role\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'username' => Str::random(16),
            'password_hash' => Hash::make($this->faker->unique()->sha256),
            'email' => $this->faker->unique()->companyEmail,
            'telephone' => $this->faker->unique()->numberBetween(10000000000, 19999999999),
//            'name' => Str::random(8),
            'name' => $this->faker->name,
            'gender' => $this->faker->boolean ? '男' : '女',
        ];
    }
}
