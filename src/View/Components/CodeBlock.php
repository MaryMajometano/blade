<?php

namespace Flattens\Blade\View\Components;

use Flattens\Blade\View\Component;

class CodeBlock extends Component
{
    /**
     * The components content.
     *
     * @var string
     */
    public $code;

    /**
     * Create a new code block instance.
     *
     * @param array $string
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * Render the view component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('Flattens\Blade::code-block', $this->data());
    }
}
