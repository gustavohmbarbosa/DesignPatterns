<?php

namespace Ghmb\DesignPatterns\Taxes;

use Ghmb\DesignPatterns\Budget;

class Icms implements Tax
{
    public function calculate(Budget $budget): float
    {
        return $budget->value * 0.1;
    }
}
