<?php declare(strict_types=1);

namespace PizzaKing\Model;

use PizzaKing\Model\Fromage\Fromage;
use PizzaKing\Model\Sauce\Sauce;
use PizzaKing\Model\Viande\Viande;

class PizzaClassique implements Pizza
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

    public function getPrix(): float
    {
        // Prix de base d'une pizza
        $prix = 4;

        foreach ($this->getIngredients() as $ingredient) {
            $prix += $ingredient->getPrix();
        }

        return $prix;
    }

    /**
     * @return string[]
     */
    public function getIngredientNames(): array
    {
        return array_map(function (Ingredient $ingredient) {
            return $ingredient->getName();
        }, $this->getIngredients());
    }

    /**
     * @return Ingredient[]
     */
    private function getIngredients(): array
    {
        return [
            $this->sauce,
            $this->fromage,
            ...$this->viandes,
        ];
    }
}
