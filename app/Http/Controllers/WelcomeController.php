<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  /**
   * Display Welcome.
   * 
   * @return \Illuminate\Http\Response
   */
  public function welcome()
  {
    $event = Event::whereDate('date', '>=', now())->orderBy('date', 'asc')->first();

    return view('welcome')->with('event', $event);
  }
}
