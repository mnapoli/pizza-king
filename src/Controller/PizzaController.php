<?php declare(strict_types=1);

namespace PizzaKing\Controller;

use Laminas\Diactoros\Response\HtmlResponse;
use PizzaKing\Model\PizzaCreator;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Twig\Environment;

class PizzaController
{
    private Environment $template;

    public function __construct(Environment $template)
    {
        $this->template = $template;
    }

    public function pizza(ServerRequestInterface $request): ResponseInterface
    {
        $pizzaName = $request->getQueryParams()['name'] ?? '';

        $pizza = PizzaCreator::create($pizzaName);

        return new HtmlResponse($this->template->render('devis.twig', [
            'pizza' => $pizza,
        ]));
    }
}
