<?php

namespace Database\Seeders;

use App\Models\Console;
use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder
{
    public function run(): void
    {
        Console::create([
            'name' => 'PlayStation 5',
            'type' => 'PS5 Digital Edition',
            'description' => 'Rasakan gaming generasi terbaru dengan grafis memukau dan waktu loading super cepat.',
            'daily_rate' => 100000,
            'weekly_rate' => 600000,
            'monthly_rate' => 2000000,
            'stock' => 5,
        ]);

        Console::create([
            'name' => 'PlayStation 4 Pro',
            'type' => 'PS4 Pro 1TB',
            'description' => 'Gaming 4K dengan grafis yang ditingkatkan dan performa yang lebih baik.',
            'daily_rate' => 75000,
            'weekly_rate' => 450000,
            'monthly_rate' => 1500000,
            'stock' => 8,
        ]);

        Console::create([
            'name' => 'PlayStation 4',
            'type' => 'PS4 Slim 500GB',
            'description' => 'Konsol klasik dengan koleksi game yang luar biasa.',
            'daily_rate' => 50000,
            'weekly_rate' => 300000,
            'monthly_rate' => 1000000,
            'stock' => 10,
        ]);
    }
} 