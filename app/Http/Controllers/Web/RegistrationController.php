<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\{Registration, Profile, Event};
use App\Http\Requests\Registrations\StoreRegistrationRequest;
use App\Http\Requests\Registrations\UpdateRegistrationRequest;

class RegistrationController extends Controller
{
  /**
   * Instantiate a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth']);
  }
  
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $profiles = Profile::all();

    $event = Event::find(3);

    $user = auth()->user();

    $registration = Registration::where('user_id', $user->id)->where('event_id', $event->id)->count();

    return view('web.registration')->with('profiles', $profiles)
                                   ->with('event', $event)
                                   ->with('registration', $registration);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\Registrations\StoreRegistrationRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreRegistrationRequest $request)
  {
    $request->createRegistration();

    return redirect()->route('events.registration')
                     ->with('message', 'Registro realizado con éxito.');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Registration  $registration
   * @return \Illuminate\Http\Response
   */
  public function show(Registration $registration)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Registration  $registration
   * @return \Illuminate\Http\Response
   */
  public function edit(Registration $registration)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\Registrations\UpdateRegistrationRequest  $request
   * @param  \App\Models\Registration  $registration
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateRegistrationRequest $request, Registration $registration)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Registration  $registration
   * @return \Illuminate\Http\Response
   */
  public function destroy(Registration $registration)
  {
    //
  }
}
