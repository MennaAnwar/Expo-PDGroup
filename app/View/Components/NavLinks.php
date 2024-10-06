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
            ['title' => 'About US', 'slug' => 'About US'],
            ['title' => 'Our Services', 'slug' => 'Our Services'],
            ['title' => 'Our Work', 'slug' => 'Our Work'],
            ['title' => 'Resources', 'slug' => 'Resources'],
            ['title' => 'Expos', 'slug' => 'Expos'],
            ['title' => 'Contact US', 'slug' => 'Contact US'],
        ];

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() {
        return view('components.nav-links', ['links' => $this->links]);
    }
}
