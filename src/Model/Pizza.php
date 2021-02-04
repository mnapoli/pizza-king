<?php declare(strict_types=1);

namespace PizzaKing\Model;

use PizzaKing\Model\Fromage\Fromage;
use PizzaKing\Model\Fromage\Chevre;
use PizzaKing\Model\Fromage\Mozzarella;
use PizzaKing\Model\Sauce\Sauce;
use PizzaKing\Model\Sauce\SauceCreme;
use PizzaKing\Model\Sauce\SauceTomate;
use PizzaKing\Model\Viande\Viande;
use PizzaKing\Model\Viande\Jambon;
use PizzaKing\Model\Viande\Pepperoni;

class Pizza
{
    private Sauce $sauce;
    private Fromage $fromage;
    /** @var Viande[] */
    private array $viandes;

    /**
     * @param Viande[] $viandes
     */
    public function __construct(Sauce $sauce, Fromage $fromage, array $viandes)
    {
        $this->sauce = $sauce;
        $this->fromage = $fromage;
        $this->viandes = $viandes;
    }

    public function getIngredients(): array
    {
        $ingredients = function () {
            yield $this->sauce;
            foreach ($this->viandes as $viande) {
                yield $viande;
            }
            yield $this->fromage;
        };

        return \array_map(
            fn($ingredient) => match(\get_class($ingredient)) {
                SauceCreme::class => 'sauce creme',
                SauceTomate::class => 'sauce tomate',
                Chevre::class => 'chèvre',
                Mozzarella::class => 'mozzarella',
                Jambon::class => 'jambon',
                Pepperoni::class => 'pepperoni',
            },
            \iterator_to_array($ingredients()), // j'ai le droit ?
        );
    }

    public function getPrix(): float
    {
        // Prix de base d'une pizza
        $prix = 4;

        $prix += $this->sauce->getPrix();
        $prix += $this->fromage->getPrix();
        foreach ($this->viandes as $viande) {
            $prix += $viande->getPrix();
        }

        return $prix;
    }
}
