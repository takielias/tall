<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class MultiSelect extends Component
{
    public $name;
    public $label;
    public $placeholder;
    public $selected;
    public $arrayValue;
    public $dataAllowClear;
    public $multiple;

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
        array $arrayValue = [1 => 'Test 1', 2 => 'Test 2'],
        bool $dataAllowClear = false,
        string $multiple = ''
    )
    {
        $this->name = $name;
        $this->label = $label;
        $this->selected = $selected;
        $this->placeholder = $placeholder;
        $this->arrayValue = $arrayValue;
        $this->dataAllowClear = $dataAllowClear;
        $this->$multiple = $multiple;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.multi-select');
    }
}
