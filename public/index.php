<?php declare(strict_types=1);

use PizzaKing\Controller\DevisController;
use PizzaKing\Controller\HomeController;
use Slim\Factory\AppFactory;
use Twig\Environment as TwigEnvironment;
use Twig\Loader\FilesystemLoader;
use Whoops\Run as WhoopsRun;
use Whoops\Handler\PrettyPageHandler;

require __DIR__ . '/../vendor/autoload.php';

$whoops = new WhoopsRun;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

$twig = new TwigEnvironment(new FilesystemLoader(__DIR__ . '/../templates'), [
    'debug' => true,
]);

$app = AppFactory::create();

$app->get('/', [new HomeController($twig), 'home']);

$app->post('/devis', [new DevisController($twig), 'devis']);

$app->run();
