<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();

    User::factory()->create([
      'id' => 1,
      'password' => bcrypt('pass123.'),
      'name' => 'Test User',
      'email' => 'test@example.com',
    ]);

    Note::factory(100)->create();
  }
}
