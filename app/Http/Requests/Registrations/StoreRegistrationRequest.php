<?php

namespace App\Http\Requests\Registrations;

use App\Models\Registration;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class StoreRegistrationRequest extends FormRequest
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
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'profiles' => ['nullable', 'array'],
      'profiles.*' => ['nullable', 'exists:profiles,id'],
      'event' => ['required', 'exists:events,id'],
      'drink' => ['required', 'in:coffee,beer'],
      'bank' => ['required', 'string'],
      'date' => ['required', 'date_format:d/m/Y'],
      'reference' => ['required', 'string'],
      'amount' => ['required', 'numeric'],
      'description' => ['nullable', 'string']
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
      //
    ];
  }

  public function createRegistration()
  {
    $this->user()->profiles()->sync($this->profiles);

    $registration = Registration::create([
      'user_id' => $this->user()->id,
      'event_id' => $this->event,
      'drink' => $this->drink,
      'bank' => $this->bank,
      'date' => Carbon::createFromFormat('d/m/Y', $this->date),
      'reference' => $this->reference,
      'amount' => $this->amount,
      'description' => $this->description
    ]);

    return $registration;
  }
}
