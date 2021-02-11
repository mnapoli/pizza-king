<?php declare(strict_types=1);

namespace PizzaKing\Model\Kebab;

use PizzaKing\Model\Ingredient;

class Salade implements Ingredient
{
    public function getName(): string
    {
        return 'salade';
    }

    public function getPrix(): float
    {
        return 1;
    }
}
