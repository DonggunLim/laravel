<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->randomElement([
                'PHP',
                'Laravel',
                'JavaScript',
                'React',
                'Vue.js',
                'Node.js',
                'Python',
                'Django',
                'Java',
                'Spring',
                'Docker',
                'AWS',
                'MySQL',
                'PostgreSQL',
                'Redis',
                'Git',
                'Linux',
                'DevOps',
                'Frontend',
                'Backend',
                'Fullstack',
                'Remote',
                'Senior',
                'Junior'
            ])
        ];
    }
}
