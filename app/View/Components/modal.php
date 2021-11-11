<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modal extends Component
{
    public $actionType;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($actionType)
    {
        $this->actionType = $actionType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
