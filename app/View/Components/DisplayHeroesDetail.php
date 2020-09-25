<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DisplayHeroesDetail extends Component
{
    public $star;
    public $collection;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($star, $collection)
    {
        $this->star = $star;
        $this->collection = $collection;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.display-heroes-detail');
    }
}
