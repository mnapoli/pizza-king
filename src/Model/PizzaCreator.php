<?php declare(strict_types=1);

namespace PizzaKing\Model;

use PizzaKing\Model\Fromage\Chevre;
use PizzaKing\Model\Fromage\Mozzarella;
use PizzaKing\Model\Sauce\SauceCreme;
use PizzaKing\Model\Sauce\SauceTomate;
use PizzaKing\Model\Viande\Jambon;
use PizzaKing\Model\Viande\Pepperoni;

class PizzaCreator
{
    public static function create(string|array $nameOrIngredients): Pizza
    {
        if (\is_string($nameOrIngredients)) {
            return match($nameOrIngredients) {
                'Reine' => self::create([
                    'sauce tomate',
                    'jambon',
                    'mozzarella',
                ]),
                'Napolitana' => self::create([
                    'sauce tomate',
                    'mozzarella',
                ]),
                'Carnivore' => self::create([
                    'sauce creme',
                    'pepperoni',
                    'jambon',
                    'mozzarella',
                ]),
                default => throw new \Exception('Pizza inconnue'),
            };
        }
        $sauce = null;
        $fromage = null;
        $viandes = [];

        foreach ($nameOrIngredients as $ingredient) {
            switch ($ingredient) {
                case 'sauce tomate':
                    $sauce = new SauceTomate();
                    break;
                case 'sauce creme':
                    $sauce = new SauceCreme();
                    break;
                case 'mozzarella':
                    $fromage = new Mozzarella();
                    break;
                case 'chevre':
                    $fromage = new Chevre();
                    break;
                case 'jambon':
                    $viandes[] = new Jambon();
                    break;
                case 'pepperoni':
                    $viandes[] = new Pepperoni();
                    break;
                default:
                    throw new \Exception("Ingrédient \"$ingredient\" inconnu au bataillon");
            }
        }

        if ($sauce === null) {
            throw new \Exception('Sauce manquante');
        }
        if ($fromage === null) {
            throw new \Exception('Fromage manquant');
        }

        return new Pizza($sauce, $fromage, $viandes);
    }
}
