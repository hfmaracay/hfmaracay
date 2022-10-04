<?php

namespace App\Models;

use App\Queries\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
  use HasFactory;
  
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name'
  ];

  /**
   * Search Filters.
   */
  public function scopeFilterBy($query, QueryFilter $filters, array $data)
  {
    return $filters->applyTo($query, $data);
  }

  /**
   * The users that belong to the profile.
   */
  public function users()
  {
    return $this->belongsToMany(User::class);
  }
}
