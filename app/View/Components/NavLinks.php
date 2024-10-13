<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class NavLinks extends Component
{
    public $links;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        
        $this->links = [
            ['title' => 'About US', 'route' => 'home'],
            ['title' => 'Our Services', 'route' => 'home'],
            ['title' => 'Our Work', 'route' => 'home'],
            ['title' => 'Resources', 'route' => 'home'],
            ['title' => 'Expos', 'route' => 'home'],
            ['title' => 'Contact US', 'route' => 'contact-us'],
        ];

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() {
        return view('components.nav-links', ['links' => $this->links]);
    }
}
