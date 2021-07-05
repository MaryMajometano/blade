<?php

namespace Flattens\View;

use Exception;
use Throwable;

class ClassNotFoundException extends Exception
{
    public function __construct(string $class, Throwable $previous = null)
    {
        parent::__construct(sprintf('Class "%s" not found.', $class), 0, $previous);
    }
}
