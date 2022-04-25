<?php

namespace App\View\Components;

use Illuminate\View\Component;

class loadTrack extends Component
{
    public $track;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public function __construct($track,$type='list')
    {
        $this->track = $track;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.load-track');
    }
}
