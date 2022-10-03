<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Event::factory()->create([
      'name' => 'Meetup 33: WebGL',
      'resume' => 'WebGL es un #API que permite hablarle al #GPU directamente desde el navegador. Para optimizar al máximo el rendimiento de las webapps.',
      'description' => '<p>Hola, nuestro amigo Pablo Aponte nos va hablar sobre como #WebGL permite que las #webapp tengan comportamiento nativo sin tener que descargar nada. Aplicaciones al nivel de Photoshop sin necesidad de ocupar espacio en el disco duro, o videojuegos con rendimientos excelentes.</p>
      <p>WebGL es un #API que permite hablarle al #GPU directamente desde el navegador. Para optimizar al máximo el rendimiento de las webapps.</p>',
      'image' => 'Meetup33.png',
      'date' => '2021-09-16',
      'time' => '20:00:00',
			'venue' => 'Online - Zoom'
    ]);

    Event::factory()->create([
      'name' => 'Meetup 34: Convirtiendo un sueño en creación. Experiencia GameJam',
      'resume' => 'Especial para los amantes de los vídeojuegos. Experiencia en el Maracay GameJam',
      'description' => '<p>Especial para los amantes de los vídeojuegos</p>
      <p>Nuevo meetup online el próximo sábado. Pablo Aponte nos contará sobre la importancia de crear y su experiencia en el Maracay GameJam</p>',
      'image' => 'Meetup34.png',
      'date' => '2022-03-26',
      'time' => '20:00:00',
			'venue' => 'Online - Jitsi'
    ]);

    Event::factory()->create([
      'name' => 'Meetup 35: Tus Skills',
      'resume' => 'En este meetup queremos saber cuales son las habilidades y talentos profesionales de nuestros miembros y ¿qué servicios ofrecen?',
      'description' => '<p class="my-4">El viernes 14 de octubre, a partir de las 5:00 pm en Café Central, Terraza del CC Estación Central, estaremos llevando a cabo el Meetup: Tus Skills, con el que queremos saber cuales son las habilidades y talentos profesionales de nuestros miembros y ¿qué servicios ofrecen?</p>
      <p class="my-4">¡Ven a formar parte de la comunidad de tecnología mas grande del mundo!</p>',
      'image' => 'Meetup35.jpg',
      'date' => '2022-10-14',
      'time' => '17:00:00',
			'venue' => 'Café Central, Terraza del CC Estación Central'
    ]);
  }
}
