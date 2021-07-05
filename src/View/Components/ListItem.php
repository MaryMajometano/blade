<?php

namespace Flattens\View\Components;

use Flattens\View\Component;

class ListItem extends Component
{
    /**
     * The components content.
     *
     * @var \Flattens\View\Component[]
     */
    public $content;

    /**
     * Create a new list item instance.
     *
     * @param \Flattens\View\Component[]|\Flattens\View\Component
     */
    public function __construct($content)
    {
        $this->content = is_array($content) ? $content : [$content];
    }

    /**
     * Render the view component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('flattens::list-item', $this->data());
    }
}
