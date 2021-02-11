<?php declare(strict_types=1);

namespace PizzaKing\Controller;

use Laminas\Diactoros\Response\HtmlResponse;
use PizzaKing\Model\PizzaCreator;
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

    public function devisKebab(ServerRequestInterface $request): ResponseInterface
    {
        $form = $request->getParsedBody();

        $ingredients = [
            $form['sauce'],
            $form['kebab'],
        ];
        if (isset($form['salade'])) {
            $ingredients[] = 'salade';
        }
        if (isset($form['tomate'])) {
            $ingredients[] = 'tomate';
        }
        if (isset($form['oignon'])) {
            $ingredients[] = 'oignon';
        }

        $pizza = PizzaCreator::createFromPartnership($ingredients, $form['code_promo']);

        return new HtmlResponse($this->template->render('devis.twig', [
            'pizza' => $pizza,
        ]));
    }
}
