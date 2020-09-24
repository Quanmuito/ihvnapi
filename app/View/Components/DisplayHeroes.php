<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DisplayHeroes extends Component
{
    public $faction;
    public $collection;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($faction, $collection)
    {
        $this->faction = $faction;
        $this->collection = $collection;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.display-heroes');
    }
}
