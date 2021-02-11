<?php declare(strict_types=1);

namespace PizzaKing\Model;

interface Ingredient
{
    public function getName(): string;

    public function getPrix(): float;
}
