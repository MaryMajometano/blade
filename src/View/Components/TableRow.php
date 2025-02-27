<?php

namespace Flattens\Blade\View\Components;

use Flattens\Blade\View\Component;

class TableRow extends Component
{
    /**
     * The components content.
     *
     * @var \Flattens\Blade\View\Components\TableCell[] $cells
     */
    public $cells;

    /**
     * Create a new table row instance.
     *
     * @param \Flattens\Blade\View\Components\TableCell[] $cells
     */
    public function __construct(array $cells)
    {
        $this->cells = $cells;
    }

    /**
     * Render the view component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('Flattens\Blade::table-row', $this->data());
    }
}
