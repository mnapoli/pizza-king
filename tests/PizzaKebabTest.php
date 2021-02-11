<?php
declare(strict_types=1);

namespace PizzaKing\Test;

use PHPUnit\Framework\TestCase;
use PizzaKing\Model\PizzaCreator;

final class PizzaKebabTest extends TestCase
{
    /**
     * @dataProvider compositionKebab
     */
    public function testPizzaKebabAComposer(array $ingredients, int $expectedPrice): void
    {
        $pizza = PizzaCreator::createFromPartnership($ingredients, 'PizzaKebab');

        $this->assertEquals($expectedPrice, $pizza->getPrix());
        $this->assertTrue(\in_array('sauce creme', $pizza->getIngredients()));
        $this->assertTrue(\in_array('kebab', $pizza->getIngredients()));
    }

    /**
     * @dataProvider compositionKebabPourDenisse
     */
    public function testPizzaKebabAComposerPourDenisse(array $ingredients, int $expectedPrice): void
    {
        $pizza = PizzaCreator::createFromPartnership($ingredients, 'PizzaKebabPourDenisse');

        $this->assertEquals($expectedPrice, $pizza->getPrix());
        $this->assertFalse(\in_array('kebab', $pizza->getIngredients()));
    }

    public function testUnCodeDePartenariatInconnuNeDoitPasFonctionner(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Partenariat inconnu');

        PizzaCreator::createFromPartnership([], 'JeVeuxJusteUnKebab');
    }

    public function compositionKebab(): array
    {
        return [
            //            ingredients            prix
            [ [],                                 10 ],
            [ ['oignon' ],                        12 ],
            [ ['tomate' ],                        12 ],
            [ ['tomate', 'oignon' ],              14 ],
            [ ['salade' ],                        11 ],
            [ ['salade', 'oignon' ],              13 ],
            [ ['salade', 'tomate' ],              13 ],
            [ ['salade', 'tomate', 'oignon' ],    15 ],
        ];
    }

    public function compositionKebabPourDenisse(): array
    {
        return [
            //            ingredients            prix
            [ [],                                 5 ],
            [ ['oignon' ],                        7 ],
            [ ['tomate' ],                        7 ],
            [ ['tomate', 'oignon' ],              9 ],
            [ ['salade' ],                        6 ],
            [ ['salade', 'oignon' ],              8 ],
            [ ['salade', 'tomate' ],              8 ],
            [ ['salade', 'tomate', 'oignon' ],    10 ],
        ];
    }
}
