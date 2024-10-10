<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;


class Resources extends Component
{
    public $page;

    public function __construct()
    {
        $currentPath = request()->path();
        // Load the constants
        $constants = require app_path('Constants/PageConstants.php');
        
        switch (true) {
            case (Str::contains($currentPath, 'Dos_and_Don\'ts_of_a_networking_event')):
                $this->page = $constants['Dos & Don\'ts'];
                break;
                
            case (Str::contains($currentPath, 'How_to_deliver_unexpected_at_an_exhibtion')):
                $this->page = $constants['unexpected at an exhibtion'];
                break;

            case (Str::contains($currentPath, 'How_to_prepare_for_an_exhibtion')):
                $this->page = $constants['prepare for an exhibtion'];
                break;

            case (Str::contains($currentPath, 'Progressing_from_design_to_exhibit')):
                $this->page = $constants['design to exhibit'];
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.resources', ['page' => $this->page]);
    }
}
