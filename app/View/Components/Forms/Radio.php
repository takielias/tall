<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Radio extends Component
{
    public $name;
    public $value;
    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $value, string $label)
    {
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.radio');
    }
}
