<?php

namespace App\Http\Requests\Messages;

use App\Models\Message;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'first_name' => 'required|string',
      'last_name' => 'required|string',
      'email' => 'required|email',
      'phone' => '',
      'message' => 'required',
    ];
  }

  /**
   * Get the validation messages that apply to the request.
   *
   * @return array
   */
  public function messages()
  {
    return [
      'first_name.required' => 'Nombre requerido',
      'last_name.required' => 'Apellido requerido',
      'email.required' => 'Email requerido',
      'email.email' => 'Email inválido',
      'message.required' => 'Mensaje requerido',
    ];
  }

  public function createMessage() {
    $message = Message::create([
      'first_name' => $this->first_name,
      'last_name' => $this->last_name,
      'email' => $this->email,
      'phone' => $this->phone ?? null,
      'content' => $this->message
    ]);

    return $message;
  }
}
