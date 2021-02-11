<?php declare(strict_types=1);

namespace PizzaKing\Model\Sauce;

class SauceCreme implements Sauce
{
    public function getName(): string
    {
        return 'sauce creme';
    }

    public function getPrix(): float
    {
        return 1;
    }
}
