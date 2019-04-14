#PHP - Les tableaux (assets/php/tableau.php) fais  

##Exercice 1 fais  
Créer un tableau **mois** et l'initialiser avec les valeurs suivantes :
- **janvier**
- **février**
- **mars**
- **avril**
- **mai**
- **juin**
- **juillet**
- **aout**
- **septembre**
- **octobre**
- **novembre**
- **décembre**

##Exercice 2 fais  
Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.

##Exercice 3 fais  
Avec le tableau de l'exercice , afficher la valeur de l'index 5.

##Exercice 4 fais  
Avec le tableau de l'exercice 1, modifier le mois de **aout** pour lui ajouter l'accent manquant.

##Exercice 5 fais  
Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.

##Exercice 6 fais  
Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.

##Exercice 7 fais  
Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.

##Exercice 8 fais  
Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

##Exercice 9 fais  
Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.

##Exercice 10 fais  
Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
Cela pourra être, par exemple, de la forme : **"Le département" + nom_departement + "a le numéro" + num_departement**

#PHP - Les boucles (assets/php/boucle.php) fais  

##Exercice 1 fais  
Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer

##Exercice 2 fais  
Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieur à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable

##Exercice 3 fais  
Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieur ou égale à 10 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- décrémenter la première variable

##Exercice 4 fais  
Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur

##Exercice 5 fais  
En allant de 1 à 15 avec un pas de 1, afficher le message **On y arrive presque**.

##Exercice 6 fais  
En allant de 20 à 0 avec un pas de 1, afficher le message **C'est presque bon**.

##Exercice 7 fais  
En allant de 1 à 100 avec un pas de 15, afficher le message **On tient le bon bout**.

##Exercice 8 fais  
En allant de 200 à 0 avec un pas de 12, afficher le message **Enfin !!!!**.

#PHP - Les conditions (assets/php/condition.php) fais  

##Exercice 1 fais  
Créer une variable **age** et l'initialiser avec une valeur.
Si l'age est supérieur ou égale à 18, afficher **Vous êtes majeur**. Dans le cas contraire, afficher **Vous êtes mineur**.

##Exercice 2 fais  
Créer une variable **IsEasy** de type booléan et l'initialiser avec une valeur.
Afficher **C'est facile!!** si c'est vrai. Dans le cas contraire afficher **C'est difficile !!!**.
**Bonus :** L'écrire de deux manières différentes.

##Exercice 3 fais  
Créer deux variables **age** et **genre**. La variable **genre** peut prendre comme valeur :
- Homme
- Femme

En fonction de l'âge et du genre afficher la phrase correspondante :
- **Vous êtes un homme et vous êtes majeur**
- **Vous êtes un homme et vous êtes mineur**
- **Vous êtes une femme et vous êtes majeur**
- **Vous êtes une femme et vous êtes mineur**

Gérer tous les cas.

##Exercice 4 fais  
L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
Créer une variable **magnitude**. Selon la valeur de **magnitude**, afficher la phrase correspondante.

Magnitude   |   Phrase
------      |    ---
1           |   Micro-séisme impossible à ressentir.
2           |   Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
3           |   Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
4           |   Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
5           |   Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
6           |   Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.
7           |   Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
8           |   Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
9           |   Séisme capable de tout détruire sur une très vaste zone.

Gérer tous les cas.
*Utilser autre chose que des if else*

##Exercice 5
Traduire ce code avec des if et des else :


   <?php
     echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
   ?>

##Exercice 6
Traduire ce code avec des if et des else :


   <?php
     echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
   ?>
##Exercice 7
Traduire ce code avec des if et des else :


   <?php
     echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
   ?>
##Exercice 8
Traduire ce code avec des if et des else :


   <?php
     echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!';
   ?>

#PHP - Les variables dans les urls (assets/php/get.php) fais  

#PHP - Les formulaires (assets/php/formulaire.php) en cours  