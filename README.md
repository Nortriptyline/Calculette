# Calculette
1.  Expliquer en quelques phrases, les concepts suivants de la programmation objet : héritage, polymorphisme, méthodes virtuelles, classe abstraite, interface:
    
    - **Héritage** : Capacité d’une classe parent à transmettre les attributs et méthodes à une autre classe, qui sera considéré comme la classe enfant
    - **Polymorphisme** : Possibilité d’exécuter deux fonctions différentes à partir du même nom de fonction. On pourra par exemple appeler la fonction « ecrire », selon qu’on l’implémente sur une classe Informaticien ou Ecrivain, dans le premier cas, il y aura une écriture au clavier et dans le second une écriture manuscrite.
    - **Classe abstraite** : Elle permet de transmettre les méthodes et attributs par héritage mais n’est pas instanciable. Elle permet de s’assurer qu’une classe enfant possède tous les attributs et méthodes nécessaires.
    - **Interface** : Similairement à la classe abstraite, elle n’est pas instanciable et permet d’obliger la présence de fonction dans une classe. Cependant, elle ne possède que les signatures, l’implémentation doit être faite directement dans la classe. Ce sont notamment les interfaces qui permettent de mettre en place le polymorphisme en PHP.

2. Proposer une architecture de classe mettant en œuvre un ou plusieurs des concepts ci-dessus et répondant à notre problème. 

![UML](https://github.com/Nortriptyline/Calculette/blob/develop/uml.png?raw=true)

3. Implémenter les classes en PHP. Le code doit pouvoir être exécuté avec PHP7, sans utiliser des librairies tierces au sein des fonctions / classes métier. Les fonctions mathématiques de base de PHP (sin, sqrt, log,…) sont disponibles.

> git clone git@github.com:Nortriptyline/Calculette.git
> composer install