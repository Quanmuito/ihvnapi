<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DisplayAttribute extends Component
{
    public $key;
    public $collection;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($key, $collection)
    {
        $this->key = $key;
        $this->collection = $collection;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.display-attribute');
    }
}
