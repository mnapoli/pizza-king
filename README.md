Bonjour,

Je m'appelle Jean-Michel et je fais des pizzas dans ma pizzeria.  
Dans ma pizzeria, les clients peuvent composer des pizzas.  

Cette semaine, j'ai fait un partenariat avec le "Kebab du coin" !  
Un ami de mon cousin, un spécialiste en intégration web qui s'appelle Denisse (c'est un américain), m'a ajouté un encart bien visible en haut du site, avec la possibilité de commander une pizza kebab avec le code promo `PizzaKebab`.  
Il ne reste plus qu'à faire le code pour la pizza Kebab.

C'est très simple, voici les conditions:

- Une pizza kebab a forcément une sauce crème
- Une pizza kebab a forcément une viande kebab
- Une pizza kebab peut avoir 0, 1, 2 ou 3 garniture parmi : salade, tomate, oignon.

Voici le prix des ingrédients:

- prix de base d'une pizza : 4€
- prix de la sauce crème : 1€
- prix de la salade : 1€
- prix de la tomate : 2€
- prix de l'oignon : 2 €
- prix de la viande kebab : 5€

Au fait, Denisse aime bien les pizza Kebab, mais sans Kebab. C'est pour ça qu'il a un code client unique : `PizzaKebabPourDenisse`.   
Ce code client lui donne accès une une Pizza Kebab sans viande Kebab.

Contraintes :

- vous n'avez pas le droit d'utiliser une base de données serveur, genre MySQL (parce que mon cousin m'a dit que c'était pas web-scale)

<details>
<summary>Énoncés précédents</summary>
<details>
<summary>Énoncé Battle de devs 1</summary>
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
</details>
<details>
<summary>Énoncé Battle de devs 2</summary>
Mon cousin m'a dit qu'en analysant les data, il se trouve que certains clients aimeraient bien commander des pizzas classiques.

J'ai donc besoin qu'ils puissent commander une Reine, une Carnivore ou une Napolitana.

Contraintes :

- vous n'avez pas le droit d'utiliser une base de données serveur, genre MySQL (parce que mon cousin m'a dit que c'était pas web-scale)
- pas besoin de faire une UI web ou CLI

Objectif :

- Faire passer tous les tests au vert. (Mon cousin m'a dit qu'un expert avait fait tout le boulot en les écrivant)
</details>
</details>

Installation :

```
make install
```

Tests :

```
make tests
```

Lancer le site web (http://localhost:8000/) :

```
make website
```
