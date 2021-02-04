<?php declare(strict_types=1);

namespace PizzaKing\Controller;

use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class HomeController
{
    private Environment $template;

    public function __construct(Environment $template)
    {
        $this->template = $template;
    }

    public function home(RequestInterface $request): ResponseInterface
    {
        return new HtmlResponse($this->template->render('home.twig'));
    }
}
