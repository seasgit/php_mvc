#
# Projet version 4
#


## Optimisation des controleurs
- Il y a redondance de code notamment au niveau de la gestion de vue
- on va créer la classe `system/Controller` dont les controleurs de l'app vont hériter et qui va permettre d'optimiser entre autres le chargement de vue.
## Require de classe dans le router
- Dans l'index de la racine, on va ajouter les chargements de classe lequels seront remplacé plus tard par un autoloader


```yaml
Project v3
    app  
        Controllers  
            Accueil.php     
            Robot.php        
        Views  
            accueil/index.php   
            robots/index.php  
            base.php           
    assets
        style css et bootstrap 
    system	
        Mpdo.php           
        Controller          # Classe mère des controllers dans app\
        utile
            Util.php               
    index.php  
        Constantes Paths et urls
        router provisoire
```