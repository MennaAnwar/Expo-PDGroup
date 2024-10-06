<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InspirationCard extends Component
{
    public $img;
    /**
     * Create a new component instance.
     */
    public function __construct($img)
    {
       $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inspiration-card');
    }
}
