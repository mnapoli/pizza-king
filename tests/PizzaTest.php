<?php declare(strict_types=1);

namespace Pizza\Test;

use PHPUnit\Framework\TestCase;

class PizzaTest extends TestCase
{
    public function createPizza(array $ingredients)
    {
        /*
         * Ajoutez le code qu'il faut ici.
         */
    }

    public function testReine()
    {
        $this->createPizza([
            'sauce tomate',
            'jambon',
            'mozzarella',
        ]);
    }

    public function testNapolitana()
    {
        $this->createPizza([
            'sauce tomate',
            'mozzarella',
        ]);
    }

    public function testChevre()
    {
        $this->createPizza([
            'chevre',
            'sauce tomate',
        ]);
    }

    public function testCarnivore()
    {
        $this->createPizza([
            'creme',
            'mozzarella',
            'jambon',
            'pepperoni',
        ]);
    }

    // Manque la sauce !
    public function testErreurSauceManquante()
    {
        $this->expectException(\Exception::class);
        $this->createPizza([
            'mozzarella',
        ]);
    }

    // Manque le fromage !
    public function testErreurFromageManquant()
    {
        $this->expectException(\Exception::class);
        $this->createPizza([
            'creme',
        ]);
    }

    // C'est interdit le double fromage !
    public function testErreurDoubleFromageInterdit()
    {
        $this->expectException(\Exception::class);
        $this->createPizza([
            'tomate',
            'mozzarella',
            'chèvre',
        ]);
    }

    // N'importe quoi !
    public function testErreurIngredientsInconnus()
    {
        $this->expectException(\Exception::class);
        $this->createPizza([
            'frites',
            'ananas',
        ]);
    }
}
