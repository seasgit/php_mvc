
# Architecture MVC simplifiée


<img src="https://bpesquet.developpez.com/tutoriels/php/evoluer-architecture-mvc/images/3.png" width="360" />

#
# Projet version 1
#
## on a besoin de gérer  :
- des namespaces pour les classes
- des fichiers de classe controleur
- des fichiers de classe modèle 
- des fichiers de classe system
- des fichiers pour les vues html

- __NB__ on laisse de côté le rôle des entités et à la place on voit le rôle des models 

```yaml
Project v1
    app  
        Controllers  
            Accueil.php     #app\controllers
            Robot.php        
        Views  
            accueil/index.php  
            robots/index.php  
    assets
        style css et bootstrap 
    system	
        utile
            Util.php               #system\utile
    index.php  1
        Constantes Paths et urls
        router provisoire
```
#

## problématique des chemins et url
La structure MVC peut nous poser problème et générer des erreurs liées aux adressages relatifs pour
- charger une classe
- charger une image


## Solution dans le Router index
On crée un adressage absolu.
```php
## fichier index à la racine du projet utilisé comme router temporaire
echo phpinfo();
##
define("PATH_ROOT", dirname($_SERVER['SCRIPT_FILENAME']));
define('BASE_URL', dirname($_SERVER['SERVER_NAME']));
```
