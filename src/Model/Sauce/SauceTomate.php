<?php declare(strict_types=1);

namespace PizzaKing\Model\Sauce;

class SauceTomate implements Sauce
{
    public function getName(): string
    {
        return 'sauce tomate';
    }

    public function getPrix(): float
    {
        return 1;
    }
}
