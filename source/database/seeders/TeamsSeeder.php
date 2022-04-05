<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('teams')->insert([
      'user_id' => 1,
      'name' => 'Team 3',
      'personal_team' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);

    Team::factory()->count(5)->create();
  }
}
