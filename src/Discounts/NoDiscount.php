<?php

namespace Ghmb\DesignPatterns\Discounts;

use Ghmb\DesignPatterns\Budget;

class NoDiscount extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculate(Budget $budget): float
    {
        return 0;
    }
}
