<?php

namespace App\View\Components;
namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class SubPages extends Component
{
    public $page;

    public function __construct()
    {
        $currentPath = request()->path();
        // Load the constants
        $constants = require app_path('Constants/PageConstants.php');
        
        switch (true) {
            case (Str::contains($currentPath, 'expo')):
                $this->page = $constants['expo'];
                break;

            case (Str::contains($currentPath, 'signs')):
                $this->page = $constants['signs'];
                break;

            case (Str::contains($currentPath, 'print')):
                $this->page = $constants['print'];
                break;

            case (Str::contains($currentPath, 'cut')):
                $this->page = $constants['cut'];
                break;

            case (Str::contains($currentPath, 'fit-out')):
                $this->page = $constants['fit-out'];
                break;

        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.sub-pages', ['page' => $this->page]);
    }
}
