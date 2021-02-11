<?php declare(strict_types=1);

namespace PizzaKing\Model\Kebab;

use PizzaKing\Model\Viande\Viande;

class ViandeKebab implements Viande
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
