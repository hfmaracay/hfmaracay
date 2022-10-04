@component('mail::message')
# Contacto Web desde HFMaracay.com

Usted a recibido un mensaje con los siguientes datos:

Persona contacto: {{ $message->fullName }}

Email: {{ $message->email }}

Teléfono: {{ $message->phone }}

Mensaje: 

{{ $message->content }}
@endcomponent
