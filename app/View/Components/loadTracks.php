<?php

namespace App\View\Components;

use Illuminate\View\Component;

class loadTracks extends Component
{
    public $tracks;
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public function __construct($tracks)
    {
        $this->tracks = $tracks;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.load-tracks');
    }
}
