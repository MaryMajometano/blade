<?php

namespace Flattens\Flattens\View\Components;

use Flattens\Flattens\View\Component;

class OrderedList extends Component
{
    /**
     * The components content.
     *
     * @var \Flattens\Flattens\View\Components\ListItem[]
     */
    public $items;

    /**
     * Create a new ordered list instance.
     *
     * @param \Flattens\Flattens\View\Components\ListItem[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * Render the view component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('flattens::ordered-list', $this->data());
    }
}
