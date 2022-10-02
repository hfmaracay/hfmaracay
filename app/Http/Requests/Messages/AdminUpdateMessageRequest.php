<?php

namespace App\Http\Requests\Messages;

use App\Models\Message;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateMessageRequest extends FormRequest
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
      'reply' => 'required',
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
      'reply.required' => 'Respuesta requerida',
    ];
  }

  public function updateMessage(Message $message) {
    $message->fill([
      'answered' => true,
      'reply' => $this->reply,
    ]);

    $message->save();
  }
}
