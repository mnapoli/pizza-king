<?php declare(strict_types=1);

namespace PizzaKing\Model\Sauce;

use PizzaKing\Model\Sauce\Sauce;

class SauceTomate implements Sauce
{
    public function getPrix(): float
    {
        return 1;
    }
}
