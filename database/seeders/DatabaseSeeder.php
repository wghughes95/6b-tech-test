<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Flexibility;
use App\Models\Size;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com'
        ]);

        Flexibility::factory()->create([
            'name' => '+/- 1 Day'
        ]);

        Flexibility::factory()->create([
            'name' => '+/- 2 Days'
        ]);

        Flexibility::factory()->create([
            'name' => '+/- 3 Days'
        ]);

        Size::factory()->create([
            'name' => 'Small'
        ]);

        Size::factory()->create([
            'name' => 'Medium'
        ]);

        Size::factory()->create([
            'name' => 'Large'
        ]);

        Size::factory()->create([
            'name' => 'Van'
        ]);
    }
}
