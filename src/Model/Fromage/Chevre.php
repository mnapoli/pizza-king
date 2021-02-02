<?php declare(strict_types=1);

namespace PizzaKing\Model\Fromage;

class Chevre implements Fromage
{
    public function getPrix(): float
    {
        return 2;
    }
}
