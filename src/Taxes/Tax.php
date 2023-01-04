<?php

namespace Ghmb\DesignPatterns\Taxes;

use Ghmb\DesignPatterns\Budget;

interface Tax
{
    public function calculate(Budget $budget): float;
}
