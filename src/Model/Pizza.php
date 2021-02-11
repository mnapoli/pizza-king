<?php
declare(strict_types=1);

namespace PizzaKing\Model;

interface Pizza
{
    public function getPrix(): float;

    public function getIngredients(): array;
}
