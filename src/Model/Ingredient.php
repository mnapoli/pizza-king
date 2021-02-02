<?php declare(strict_types=1);

namespace PizzaKing\Model;

interface Ingredient
{
    public function getPrix(): float;
}
