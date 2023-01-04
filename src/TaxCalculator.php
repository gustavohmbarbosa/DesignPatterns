<?php

namespace Ghmb\DesignPatterns;

use Ghmb\DesignPatterns\Taxes\Tax;

class TaxCalculator
{
    public function calculate(Budget $budget, Tax $tax): float
    {
        return $tax->calculate($budget);
    }
}
