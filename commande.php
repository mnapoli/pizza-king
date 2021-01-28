<?php declare(strict_types=1);

/*
 * Créer la pizza ici
 */


/*
 * Et ensuite on affiche le prix de la pizza :
 */
echo 'Voici le prix de votre pizza :' . PHP_EOL;
printf('%.2f €', $pizza->prix());
