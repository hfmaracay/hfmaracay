<?php

namespace App\Models;

use App\Queries\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
  use HasFactory;
  
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id', 'event_id', 'drink', 'bank', 'date', 'reference', 'amount', 'description'
  ];

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = ['date'];

  /**
   * Search Filters.
   */
  public function scopeFilterBy($query, QueryFilter $filters, array $data)
  {
    return $filters->applyTo($query, $data);
  }

  /**
   * Get the user that owns the registration.
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  /**
   * Get the event that owns the registration.
   */
  public function event()
  {
    return $this->belongsTo(Event::class);
  }
}
