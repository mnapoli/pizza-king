<?php declare(strict_types=1);

use PizzaKing\Controller\DevisController;
use PizzaKing\Controller\HomeController;
use PizzaKing\Controller\PizzaController;
use Slim\Factory\AppFactory;
use Twig\Loader\FilesystemLoader;

require __DIR__ . '/../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$twig = new \Twig\Environment(new FilesystemLoader(__DIR__ . '/../templates'), [
    'debug' => true,
]);

$app = AppFactory::create();

$app->get('/', [new HomeController($twig), 'home']);

$app->post('/devis', [new DevisController($twig), 'devis']);

$app->get('/pizza', [new PizzaController($twig), 'pizza']);

$app->run();
