<?php

namespace App\View\Components;

use Illuminate\View\Component;

class genres extends Component
{
    public $genres;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($genres)
    {
        //
        $this->genres = $genres;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.genres');
    }
}
