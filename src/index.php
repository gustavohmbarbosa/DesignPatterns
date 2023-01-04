<?php

require '../vendor/autoload.php';

use Ghmb\DesignPatterns\Budget;
use Ghmb\DesignPatterns\TaxCalculator;
use Ghmb\DesignPatterns\Taxes\Icms;
use Ghmb\DesignPatterns\Taxes\Iss;

$budget = new Budget();
$budget->value = 100;

echo "====================\n";
echo "STRATEGY PATTERN\n";
echo "====================\n";
$taxCalculator = new TaxCalculator();
echo $taxCalculator->calculate($budget, new Icms()) . "\n";
echo $taxCalculator->calculate($budget, new Iss()) . "\n";

echo "================================\n";
echo "CHAIN OF RESPONSIBILITY PATTERN\n";
echo "================================\n";
$discountCalculator = new \Ghmb\DesignPatterns\DiscountCalculator();
echo "1. No discount\n";
$budget->value = 100;
$budget->itemsAmount = 1;
echo $discountCalculator->calculate($budget) . "\n";

echo "2. 5% discount\n";
$budget->value = 600;
$budget->itemsAmount = 3;
echo $discountCalculator->calculate($budget) . "\n";

echo "3. 10% discount\n";
$budget->value = 600;
$budget->itemsAmount = 6;
echo $discountCalculator->calculate($budget) . "\n";

echo "\n";
