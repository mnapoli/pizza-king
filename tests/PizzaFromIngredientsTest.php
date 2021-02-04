<?php declare(strict_types=1);

namespace PizzaKing\Test;

use Exception;
use PHPUnit\Framework\TestCase;
use PizzaKing\Model\PizzaCreator;

class PizzaFromIngredientsTest extends TestCase
{
    public function testReine()
    {
        $pizza = PizzaCreator::create(
            'sauce tomate',
            'jambon',
            'mozzarella',
        );

        $this->assertEquals(10, $pizza->getPrix());
    }

    public function testNapolitana()
    {
        $pizza = PizzaCreator::create(
            'sauce tomate',
            'mozzarella',
        );

        $this->assertEquals(8, $pizza->getPrix());
    }

    public function testChevre()
    {
        $pizza = PizzaCreator::create(
            'chevre',
            'sauce tomate',
        );

        $this->assertEquals(7, $pizza->getPrix());
    }

    public function testCarnivore()
    {
        $pizza = PizzaCreator::create(
            'sauce creme',
            'mozzarella',
            'jambon',
            'pepperoni',
        );

        $this->assertEquals(14, $pizza->getPrix());
    }

    // Manque la sauce !
    public function testErreurSauceManquante()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Sauce manquante');
        PizzaCreator::create(
            'mozzarella',
        );
    }

    // Manque le fromage !
    public function testErreurFromageManquant()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Fromage manquant');
        PizzaCreator::create(
            'sauce creme',
        );
    }

    // N'importe quoi !
    public function testErreurIngredientsInconnus()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Ingrédient "frites" inconnu au bataillon');
        PizzaCreator::create(
            'frites',
            'ananas',
        );
    }
}
