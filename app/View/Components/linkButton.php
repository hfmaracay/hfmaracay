<?php

namespace App\View\Components;

use Illuminate\View\Component;

class linkButton extends Component
{
  public $frontend;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($frontend = '')
  {
    $this->frontend = $frontend;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.link-button');
  }
}
