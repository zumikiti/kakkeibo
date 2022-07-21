<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CashBook>
 */
class CashBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => now(),
            'item_id' => 1,
            'budget_type' => mt_rand(0, 1) ? '収入' : '支出',
            'price' => mt_rand(1, 100) * 100,
            'remarks' => Str::random(100),
        ];
    }
}
