<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert([
      'name' => 'Hải Nghĩa',
      'email' => 'nghiahh.nta@gmail.com',
      'email_verified_at' => now(),
      'password' => Hash::make('12345678'),
      'remember_token' => Str::random(32),
      'created_at' => now(),
      'updated_at' => now()
    ]);

    User::factory()
      ->count(5)
      ->create();
  }
}
