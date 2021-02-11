<?php
declare(strict_types=1);

namespace PizzaKing\Test;

use PHPUnit\Framework\TestCase;
use PizzaKing\Model\PizzaCreator;

final class PizzaKebabTest extends TestCase
{
    public function testPizzaKebab(): void
    {
        $pizza = PizzaCreator::createPizzaKebab();
        $this->assertEquals(15, $pizza->getPrix());

        // Sans salade
        $sansSalade = PizzaCreator::createPizzaKebab(false);
        $this->assertEquals(14, $sansSalade->getPrix());

        // Sans oignon
        $sansSalade = PizzaCreator::createPizzaKebab(true, true, false);
        $this->assertEquals(13, $sansSalade->getPrix());
    }

    public function testPizzaKebabPourDenisse(): void
    {
        $pizza = PizzaCreator::createPizzaKebab(true, true, true, 'PizzaKebabPourDenisse');
        // Pas de viande !
        $this->assertNotContains('kebab', $pizza->getIngredientNames());
        $this->assertEquals(10, $pizza->getPrix());
    }

    public function testUnCodeInconnuNeDoitPasFonctionner(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Partenariat inconnu');

        PizzaCreator::createPizzaKebab(true, true, true, 'JeVeuxJusteUnKebab');
    }
}
