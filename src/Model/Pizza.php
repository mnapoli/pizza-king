<?php declare(strict_types=1);

namespace PizzaKing\Model;

use PizzaKing\Model\Fromage\Fromage;
use PizzaKing\Model\Sauce\Sauce;
use PizzaKing\Model\Viande\Viande;

class Pizza
{
    private Sauce $sauce;
    private Fromage $fromage;
    /** @var Viande[] */
    private array $viandes;

    private $ingredients;

    /**
     * @param Viande[] $viandes
     */
    public function __construct(Sauce $sauce, Fromage $fromage, array $viandes, array $liste)
    {
        $this->sauce = $sauce;
        $this->fromage = $fromage;
        $this->viandes = $viandes;
        $this->ingredients = $liste;
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
    public function getIngredients()
    {
        return $this->ingredients;
    }
}
