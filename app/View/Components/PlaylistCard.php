<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PlaylistCard extends Component
{

    public $playlist;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($playlist)
    {
        $this->playlist = $playlist;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.playlist-card');
    }
}
