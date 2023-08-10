<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Event;
use App\Models\Orphan;
use App\Models\User;
use Database\Factories\EventFactory;
use Database\Factories\OrphanFactory;
use Illuminate\Database\Seeder;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       $this->call(UserSeeder::class);
      User::factory(30)->create();
       Orphan::factory(30)->create();
       Event::factory(30)->create();
        Category::factory(30)->create();
       
    }
}
