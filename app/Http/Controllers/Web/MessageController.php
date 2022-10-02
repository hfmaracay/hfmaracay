<?php

namespace App\Http\Controllers\Web;

use App\Models\Message;
use App\Mail\ContactMail;
use App\Http\Controllers\Controller;
use App\Http\Requests\Messages\StoreMessageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\Messages\StoreMessageRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreMessageRequest $request)
  {
    $mailMessage = $request->createMessage();

    Mail::to('hola@hfmaracay.com', 'H/F Maracay - Contacto')->send(new ContactMail($mailMessage));

    return redirect()->route('welcome', '#contact')
                     ->with('message', 'Mensaje enviado con éxito. Gracias por contactarnos, pronto responderemos.');
  }
}
