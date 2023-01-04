<?php

namespace Ghmb\DesignPatterns\Discounts;

use Ghmb\DesignPatterns\Budget;

class MoreThanFiveHundred extends Discount
{
    public function __construct(Discount $nextDiscount)
    {
        parent::__construct($nextDiscount);
    }

    public function calculate(Budget $budget): float|Discount
    {
        if ($budget->value > 500) {
            return $budget->value * 0.05;
        }

        return $this->nextDiscount->calculate($budget);
    }
}
