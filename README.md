Bonjour,

Je m'appelle Jean-Michel et je fais des pizzas dans ma pizzeria.

Dans ma pizzeria, les clients peuvent composer des pizzas.

Et j'ai besoin d'un SI pour digitaliser la composition des pizzas (forcément).

L'application me permettra de m'assurer qu'on ne crée que des pizzas valides, et de calculer le prix d'une pizza.

Voici les règles pour composer des pizzas :

- une pizza comporte forcément une sauce : tomate ou crème.
- une pizza comporte forcément un fromage : mozzarella ou chèvre.
- une pizza comporte 0, 1 ou 2 viandes : jambon et/ou pepperoni et/ou rien.

Voici le prix des ingrédients :

- prix de base d'une pizza : 4 €
- sauce tomate : 1 €
- sauce crème : 1 €
- mozzarella : 3 €
- chèvre : 2 €
- jambon : 2 €
- pepperoni : 4 €

Il se trouve que les clients de la pizzeria sont des développeurs PHP.
Ils passeront commande via un script PHP, en appelant les classes et/ou fonctions nécessaires.
Pizzeria 2.0 !

Contraintes :

- vous n'avez pas le droit d'utiliser une base de données serveur, genre MySQL (parce que mon cousin m'a dit que c'était pas web-scale)
- pas besoin de faire une UI web ou CLI

Objectif :

- utiliser le maximum de features uniques à PHP 8 (mon cousin m'a dit que c'était mieux)

Installation :

```
make install
```
