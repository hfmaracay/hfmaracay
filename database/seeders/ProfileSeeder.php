<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Profile::factory()->create(['name' => 'Frontend']);
    Profile::factory()->create(['name' => 'Backend']);
    Profile::factory()->create(['name' => 'Desarrollo Móvil']);
    Profile::factory()->create(['name' => 'Diseño Gráfico']);
    Profile::factory()->create(['name' => 'Marketing / Social Media']);
    Profile::factory()->create(['name' => 'Ventas']);
    Profile::factory()->create(['name' => 'Administración']);
    Profile::factory()->create(['name' => 'Contabilidad / Finanzas']);
    Profile::factory()->create(['name' => 'Jurídico / Legal']);
    Profile::factory()->create(['name' => 'Soporte Técnico']);
    Profile::factory()->create(['name' => 'Telecomunicaciones']);
  }
}
