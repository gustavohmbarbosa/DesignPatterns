<?php

namespace Ghmb\DesignPatterns\Discounts;

use Ghmb\DesignPatterns\Budget;

class FiveItems extends Discount
{
    public function __construct(Discount $nextDiscount)
    {
        parent::__construct($nextDiscount);
    }

    public function calculate(Budget $budget): float|Discount
    {
        if ($budget->itemsAmount > 5) {
            return $budget->value * 0.1;
        }

        return $this->nextDiscount->calculate($budget);
    }
}
