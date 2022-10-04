<?php

namespace App\View\Components;

use Illuminate\View\Component;

class hero extends Component
{
  public $background;
  public $title;
  public $description;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($background = '', $title = '', $description = '')
  {
    $this->background = $background;
    $this->title = $title;
    $this->description = $description;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.hero');
  }
}
