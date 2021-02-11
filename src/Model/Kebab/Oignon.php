<?php declare(strict_types=1);

namespace PizzaKing\Model\Kebab;

use PizzaKing\Model\Ingredient;

class Oignon implements Ingredient
{
    public function getName(): string
    {
        return 'oignon';
    }

    public function getPrix(): float
    {
        return 2;
    }
}
