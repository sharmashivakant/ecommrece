<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Cities extends Component
{
    public $cities = [
        'AM' => 'Ambala',
        'KKR' => 'Kurukshetra',
        'KR' => 'Karnal',
        'CH' => 'Chandigarh',
    ];
    public $class;
    public $selected;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = 'form-control' , $selected = '')
    {
        $this->class = $class;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cities');
    }
}
