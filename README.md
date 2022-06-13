# Calculette

1.  Expliquer en quelques phrases, les concepts suivants de la programmation objet : héritage, polymorphisme, méthodes virtuelles, classe abstraite, interface:

    - **Héritage** : Capacité d’une classe parent à transmettre les attributs et méthodes à une autre classe, qui sera considéré comme la classe enfant
    - **Polymorphisme** : Possibilité d’exécuter deux fonctions différentes à partir du même nom de fonction. On pourra par exemple appeler la fonction « ecrire », selon qu’on l’implémente sur une classe Informaticien ou Ecrivain, dans le premier cas, il y aura une écriture au clavier et dans le second une écriture manuscrite.
    - **Classe abstraite** : Elle permet de transmettre les méthodes et attributs par héritage mais n’est pas instanciable. Elle permet de s’assurer qu’une classe enfant possède tous les attributs et méthodes nécessaires.
    - **Interface** : Similairement à la classe abstraite, elle n’est pas instanciable et permet d’obliger la présence de fonction dans une classe. Cependant, elle ne possède que les signatures, l’implémentation doit être faite directement dans la classe. Ce sont notamment les interfaces qui permettent de mettre en place le polymorphisme en PHP.

2.  Proposer une architecture de classe mettant en œuvre un ou plusieurs des concepts ci-dessus et répondant à notre problème.

![UML](https://github.com/Nortriptyline/Calculette/blob/develop/uml.png?raw=true)

3. Implémenter les classes en PHP. Le code doit pouvoir être exécuté avec PHP7, sans utiliser des librairies tierces au sein des fonctions / classes métier. Les fonctions mathématiques de base de PHP (sin, sqrt, log,…) sont disponibles.

```bash
# Clonage du repo
git clone git@github.com:Nortriptyline/Calculette.git
# Installation des dépendances
composer install 
# Démarrage du serveur PHP sur le port 8080 et ayant le dossier public comme racine
php -S localhost:8080 -t public/
```
<a href="https://github.com/Nortriptyline/Calculette/wiki)">Voir le détails des URL </a>



4. Justification des choix:
   - **Architecture** : Architecture MVC, en plus de structurer le code et en simplifier la lecture, elle permet de séparer les types d'actions et de limiter les impactes de modifications à la couche concerné.
   - **Organisation des classes** :
     - Tous les modèles hérite d'une classe abstraite _Forme_. Cette dernière partage les paramètre _area_ et _perimeter_ ainsi que leurs setters, puisque ces derniers seront utilisés dans tous les enfants.
     - On implémente également une interface _Geometry_ à _Forme_, qui permettra de s'assurer que toutes les classes enfants se verront attribuer les fonctions _calcArea_ et _calcPerimeter_.
     - La classe _Rectangle_ se voit attribuer une classe enfant _Carre_, car un carré est un rectangle avec des propriétés particulières. Toutes les fonctions valables pour un Rectangle le sont pour un _Carre_. On a cependant simplifié les fonctions de calculs du _Carre_ afin que ces dernières ne correspondent qu'à ce dernier.
     - _Triangle_ possède les méthodes de calcul pour un triangle quelconque. Celles-ci sont également valable pour _TriangleRectangle_ et _TriangleIsocele_. Cependant ces derniers possèdent des propriétés particulières et des méthodes de calculs simplifiés qui leurs sont propres. On a donc décidé de les faire hériter toutes les deux de _Triangle_.
     - Les classes _Disque_ et _Couronne_ sont deux classes à part entière. Cependant, pour faciliter les calculs de _Couronne_, cette dernière instancie deux _Disque_, un intérieur et un extérieur. Cette architecture peut poser problème en cas de modification ou suppression de la classe _Disque_. Mais les méthodes de calculs d'aire et de périmètre étant valides, il n'y a aucun risque d'exposer _Couronne_ à une dépendance de _Disque_
   - **"Bonne pratiques"** : PSR-1 pour le standard de codage et PSR-4 pour l'autoloading via namespace. Ces normes classiques permettent de faciliter l'interprétation du PHP par des applications et de simplifier la lecture du code pour les développeurs.
   - **Framework** : _Leaf_ est un Framework léger et rapide pratique pour le prototypage. Il sert ici à établir la liaison entre les routes définis dans le fichier _routes.php_ et les controllers afin de rentre le projet accessible par _API_.
