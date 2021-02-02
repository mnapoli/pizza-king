<?php declare(strict_types=1);

namespace PizzaKing\Model\Viande;

class Jambon implements Viande
{
    public function getPrix(): float
    {
        return 2;
    }
}
