<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DisplayHeroesDetail extends Component
{
    public $star;
    public $hero;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($star, $hero)
    {
        $this->star = $star;
        $this->hero = $hero;
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
