<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $label;
    public $action;

    public function __construct($type = 'edit', $label = 'Edit', $action = '#')
    {
        $this->type = $type;
        $this->label = $label;
        $this->action = $action;
    }

    public function render()
    {
        return view('components.button');
    }
}
