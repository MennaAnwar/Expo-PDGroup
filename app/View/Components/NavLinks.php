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
        $currentPath = request()->path();
        // Load the constants
        $constants = require app_path('Constants/PageConstants.php');
        
        switch (true) {
            case (Str::contains($currentPath, 'expo')):
                $this->links = $constants['expo']->links;
                break;

            case (Str::contains($currentPath, 'signs')):
                $this->links = $constants['signs']->links;
                break;

            case (Str::contains($currentPath, 'print')):
                $this->links = $constants['print']->products;
                break;

            case (Str::contains($currentPath, 'cut')):
                $this->links = $constants['cut']->products;
                break;

            case (Str::contains($currentPath, 'fit-out')):
                $this->links = $constants['fit-out']->products;
                break;

            default:
                $this->links = [
                    ['title' => ' Print', 'slug' => 'print'],
                    ['title' => 'Signs', 'slug' => 'signs'],
                    ['title' => 'Shopfitting', 'slug' => 'fit-out'],
                    ['title' => 'Cut', 'slug' => 'cut'],
                    ['title' => 'Expo', 'slug' => 'expo'],
                ];
                break;

        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() {
        return view('components.nav-links', ['links' => $this->links]);
    }
}
