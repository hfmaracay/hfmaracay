<?php

namespace App\Queries;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class MessageFilter extends QueryFilter
{
	public function rules(): array
	{
		return [
			'search' => 'filled',
      'from' => 'date_format:d/m/Y',
      'to' => 'date_format:d/m/Y'
		];
	}

	public function search($query, $search) {
    return $query->where(function ($query) use ($search) {
      $query->whereRaw('CONCAT(first_name, " ", last_name) like ?', "%{$search}%")
            ->orWhere('email', 'like', "%{$search}%");
    });
	}

	public function from($query, $date)
  {
  	$date = Carbon::createFromFormat('d/m/Y', $date);

    return $query->whereDate('created_at', '>=', $date);
  }

  public function to($query, $date)
  {
  	if(empty($date)) {
			return $this;
		}

    $date = Carbon::createFromFormat('d/m/Y', $date);

    return $query->whereDate('created_at', '<=', $date);
  }
}