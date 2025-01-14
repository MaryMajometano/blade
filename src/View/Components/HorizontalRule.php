<?php

namespace Flattens\Blade\View\Components;

use Flattens\Blade\View\Component;

class HorizontalRule extends Component
{
    /**
     * Render the view component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('Flattens\Blade::horizontal-rule', $this->data());
    }
}
