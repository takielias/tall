<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $label;
    public $placeholder;
    public $selected;
    public $arrayValue;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label = '',
        string $placeholder = '',
        string $selected = null,
        array $arrayValue = []
    )
    {
        $this->name = $name;
        $this->label = $label;
        $this->selected = $selected;
        $this->placeholder = $placeholder;
        $this->arrayValue = $arrayValue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.select');
    }
}
