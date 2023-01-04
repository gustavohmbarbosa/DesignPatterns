<?php

namespace Ghmb\DesignPatterns\Taxes;

use Ghmb\DesignPatterns\Budget;

class Iss implements Tax
{
    public function calculate(Budget $budget): float
    {
        return $budget->value * 0.06;
    }
}
