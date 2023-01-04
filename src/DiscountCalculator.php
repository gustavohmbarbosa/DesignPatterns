<?php

namespace Ghmb\DesignPatterns;

use Ghmb\DesignPatterns\Budget;
use Ghmb\DesignPatterns\Discounts\FiveItems;
use Ghmb\DesignPatterns\Discounts\NoDiscount;
use Ghmb\DesignPatterns\Discounts\MoreThanFiveHundred;

class DiscountCalculator
{
    public function calculate(Budget $budget): float
    {
        $discountsChain = new FiveItems(
            new MoreThanFiveHundred(
                new NoDiscount()
            )
        );

        return $discountsChain->calculate($budget);
    }
}
