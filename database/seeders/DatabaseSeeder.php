<?php

namespace Database\Seeders;

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

    User::create([
      'name' => 'Mustofa',
      'email' => 'mustofa@gmail.com',
      'password' => bcrypt('password'),
    ]);
    User::create([
      'name' => 'Ulum',
      'email' => 'ulum@gmail.com',
      'password' => bcrypt('password'),
    ]);
    User::create([
      'name' => 'Roni',
      'email' => 'roni@gmail.com',
      'password' => bcrypt('password'),
    ]);
    User::create([
      'name' => 'Supri',
      'email' => 'supri@gmail.com',
      'password' => bcrypt('password'),
    ]);
    User::create([
      'name' => 'Eko',
      'email' => 'eko@gmail.com',
      'password' => bcrypt('password'),
    ]);
  }
}
