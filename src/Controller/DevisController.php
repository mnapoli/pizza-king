<?php declare(strict_types=1);

namespace PizzaKing\Controller;

use Laminas\Diactoros\Response\HtmlResponse;
use PizzaKing\Model\Fromage\Chevre;
use PizzaKing\Model\PizzaCreator;
use PizzaKing\Model\Viande\Jambon;
use PizzaKing\Model\Fromage\Mozzarella;
use PizzaKing\Model\Viande\Pepperoni;
use PizzaKing\Model\Pizza;
use PizzaKing\Model\Sauce\SauceCreme;
use PizzaKing\Model\Sauce\SauceTomate;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Twig\Environment;

class DevisController
{
    private Environment $template;

    public function __construct(Environment $template)
    {
        $this->template = $template;
    }

    public function devis(ServerRequestInterface $request): ResponseInterface
    {
        $form = $request->getParsedBody();

        $ingredients = [
            $form['sauce'],
            $form['fromage'],
        ];
        if (isset($form['jambon'])) {
            $ingredients[] = 'jambon';
        }
        if (isset($form['pepperoni'])) {
            $ingredients[] = 'pepperoni';
        }

        $pizza = PizzaCreator::create($ingredients);

        return new HtmlResponse($this->template->render('devis.twig', [
            'pizza' => $pizza,
        ]));
    }
}
