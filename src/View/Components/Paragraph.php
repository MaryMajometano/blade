<?php

namespace Flattens\Blade\View\Components;

use Flattens\Blade\View\Component;

class Paragraph extends Component
{
    /**
     * The components content.
     *
     * @var string|\Illuminate\Support\HtmlString
    */
    public $text;

    /**
     * Create a new paragraph instance.
     *
     * @param \Illuminate\Support\HtmlString $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Render the view component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('Flattens\Blade::paragraph', $this->data());
    }
}
