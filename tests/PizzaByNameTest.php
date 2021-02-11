<?php declare(strict_types=1);

namespace PizzaKing\Test;

use Exception;
use PHPUnit\Framework\TestCase;
use PizzaKing\Model\PizzaCreator;

class PizzaByNameTest extends TestCase
{
    public function testReine()
    {
        $pizza = PizzaCreator::byName('Reine');

        $this->assertEquals(10, $pizza->getPrix());
        $this->assertEquals([
            'sauce tomate',
            'mozzarella',
            'jambon',
        ], $pizza->getIngredientNames());
    }

    public function testNapolitana()
    {
        $pizza = PizzaCreator::byName('Napolitana');

        $this->assertEquals(8, $pizza->getPrix());
        $this->assertEquals([
            'sauce tomate',
            'mozzarella',
        ], $pizza->getIngredientNames());
    }

    public function testCarnivore()
    {
        $pizza = PizzaCreator::byName('Carnivore');

        $this->assertEquals(14, $pizza->getPrix());
        $this->assertEquals([
            'sauce creme',
            'mozzarella',
            'pepperoni',
            'jambon',
        ], $pizza->getIngredientNames());
    }

    // On sait pas faire les fausses pizzas !
    public function testErreurPizzaInconnue()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Pizza inconnue');
        PizzaCreator::byName('Pizzananas');
    }
}
