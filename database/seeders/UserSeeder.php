<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $admin = User::factory()->create([
      'first_name' => 'Dayan',
      'last_name' => 'Betancourt',
      'email' => 'dayan@hf.cx',
      'email_verified_at' => now(),
      'password' => bcrypt('dayan123'),
			'gender' => 'F',
			'phone' => '(424)-317-2126'
    ]);
    
    $admin->assign('admin');
  }
}
