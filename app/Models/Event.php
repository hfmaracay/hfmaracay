<?php

namespace App\Models;

use App\Queries\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
  use HasFactory;
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'resume', 'description', 'image', 'date', 'time', 'venue'
  ];

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = ['date'];

  /**
   * Get the article's image.
   */
  public function getUrlImageAttribute() {
  	if($this->image) {
			$image = 'storage/events/'.$this->image;
		} else {
			$image = 'img/HFMaracay_Color.png';
		}

		return $image;
  }

  /**
   * Search Filters.
   */
  public function scopeFilterBy($query, QueryFilter $filters, array $data)
  {
    return $filters->applyTo($query, $data);
  }
}
