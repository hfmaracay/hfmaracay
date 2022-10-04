<?php

namespace App\Models;

use App\Queries\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
  use HasFactory;
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'first_name', 'last_name', 'email', 'phone', 'content', 'answered', 'reply'
  ];

  /**
   * Get the user's full name.
   *
   * @return string
   */
  public function getFullNameAttribute()
  {
    return "{$this->first_name} {$this->last_name}";
  }

  /**
   * Search Filters.
   */
  public function scopeFilterBy($query, QueryFilter $filters, array $data)
  {
    return $filters->applyTo($query, $data);
  }
}
