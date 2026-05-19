<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::create([
            'name' => 'Electronics',
        ]);

        \App\Models\Category::create([
            'name' => 'Foods',
        ]);

        \App\Models\Category::create([
            'name' => 'Toys',
        ]);
    }
}
