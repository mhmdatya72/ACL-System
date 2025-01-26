<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Permission>
 */
class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'control' => $this->faker->randomElement(['صلاحية', 'مجموعة', 'مستخدم', 'إدارة', 'نظام']),
            'function' => $this->faker->randomElement(['حذف المجموعه', 'تعديل علي المجموعه', 'الرائسيه', 'إدارة', 'نظام']),
            'title' => $this->faker->sentence,
        ];
    }
}
