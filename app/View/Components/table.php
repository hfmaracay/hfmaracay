<?php

namespace App\View\Components;

use Illuminate\View\Component;

class table extends Component
{
  public $isNotEmpty;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($isNotEmpty = '0')
  {
    $this->isNotEmpty = $isNotEmpty;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.table');
  }
}
