<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Logo extends Component
{
    /**
     * The URL of the logo to display.
     *
     * @var string
     */
    public $logo;

    /**
     * The custom class to apply to the logo.
     *
     * @var string
     */
    public $class;

    /**
     * The Link where the logo refers to.
     *
     * @var string
     */
    public $href;

    /**
     * The Name written beside Logo.
     *
     * @var string
     */
    public $name;

    /**
     * Create a new component instance.
     *
     * @param string $class
     */
    public function __construct($class = '')
    {
        $currentPath = request()->path(); // Get the current URL path

        switch (true) {
            case Str::contains($currentPath, 'signs'):
                $this->logo = 'icons/PD.svg';
                $this->href = 'signs';
                $this->name = 'SIGNS';
                break;
            case Str::contains($currentPath, 'expo'):
                $this->logo = 'icons/PD.svg';
                $this->href = 'expo';
                $this->name = 'EXPO';
                break;
            case Str::contains($currentPath, 'print'):
                $this->logo = 'icons/PD.svg';
                $this->href = 'print';
                $this->name = 'PRINT';
                break;

            case Str::contains($currentPath, 'cut'):
                $this->logo = 'icons/PD.svg';
                $this->href = 'cut';
                $this->name = 'CUT';
                break;

            case Str::contains($currentPath, 'fit-out'):
                $this->logo = 'icons/PD.svg';
                $this->href = 'fit-out';
                $this->name = 'FIT-OUT';
                break;

            default:
                $this->logo = 'logo.svg';
                $this->href = 'home';
                $this->name = '';
                break;
        }

        // Assign the custom class, default to an empty string if not provided
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.logo');
    }
}
