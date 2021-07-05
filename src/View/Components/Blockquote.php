<?php

namespace Flattens\View\Components;

use Flattens\View\Component;

class Blockquote extends Component
{
    /**
     * The components content.
     *
     * @var \Flattens\View\Component[]
     */
    public $content;

    /**
     * Create a new blockquote instance.
     *
     * @param \Flattens\View\Component[] $content
     */
    public function __construct(array $content)
    {
        $this->content = $content;
    }

    /**
     * Render the view component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('flattens::blockquote', $this->data());
    }
}
