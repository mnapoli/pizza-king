<?php declare(strict_types=1);

namespace PizzaKing\Test;

use Exception;
use PHPUnit\Framework\TestCase;
use PizzaKing\Model\PizzaCreator;

class NamedPizzasTest extends TestCase
{
    public function testReine()
    {
        $pizza = PizzaCreator::create('Reine');

        $this->assertEquals(10, $pizza->getPrix());
        $this->assertEquals([
            'sauce tomate',
            'jambon',
            'mozzarella',
        ], $pizza->getIngredients());
    }

    public function testNapolitana()
    {
        $pizza = PizzaCreator::create('Napolitana');

        $this->assertEquals(8, $pizza->getPrix());
        $this->assertEquals([
            'sauce tomate',
            'mozzarella',
        ], $pizza->getIngredients());
    }

    public function testChevre()
    {
        $pizza = PizzaCreator::create('Chevre');

        $this->assertEquals(7, $pizza->getPrix());
        $this->assertEquals([
            'sauce tomate',
            'chevre',
        ], $pizza->getIngredients());
    }

    public function testCarnivore()
    {
        $pizza = PizzaCreator::create('Carnivore');

        $this->assertEquals(14, $pizza->getPrix());
        $this->assertEquals([
            'sauce creme',
            'pepperoni',
            'jambon',
            'mozzarella',
        ], $pizza->getIngredients());
    }

    // On sait pas faire les fausses pizzas !
    public function testErreurPizzaInconnue()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Pizza inconnue');
        PizzaCreator::create('Pizzananas');
    }
}
