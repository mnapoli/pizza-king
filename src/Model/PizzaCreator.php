<?php declare(strict_types=1);

namespace PizzaKing\Model;

use Exception;
use PizzaKing\Model\Fromage\Chevre;
use PizzaKing\Model\Fromage\Mozzarella;
use PizzaKing\Model\Sauce\SauceCreme;
use PizzaKing\Model\Sauce\SauceTomate;
use PizzaKing\Model\Viande\Jambon;
use PizzaKing\Model\Viande\Pepperoni;

class PizzaCreator
{
    public static function createFromString (string $pizza)
    {
        // Je vais pas avoir le temps de le faire avec un objet et le cast qui va bien
        $obj1 = new \stdClass;

        $  = json_decode('{"Carnivore":["sauce creme","pepperoni","jambon","mozzarella"],"Napolitana":["sauce tomate","mozzarella"],"Reine":["sauce tomate","jambon","mozzarella"]}'
);
        if (!isset($ ->$pizza)) throw new Exception('Pizza inconnue');

        return self::create($ ->$pizza);
    }
    public static function create(array|string $ingredients): Pizza
    {
        if (is_string($ingredients)) goto  ;
        $sauce = null;
        $fromage = null;
        $viandes = [];

        foreach ($ingredients as $ingredient) {
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

        return new Pizza($sauce, $fromage, $viandes, $ingredients);
         :
        return self::createFromString($ingredients);

    }
}
