<?php declare(strict_types=1);

namespace PizzaKing\Model\Viande;

class Kebab implements Viande
{
    public function getName(): string
    {
        return 'kebab';
    }

    public function getPrix(): float
    {
        return 5;
    }
}
