#
# Projet version 2
#
- On optimise les vues

## Template de base 
- on crée `views/base.php`
- on crée un menu de navigation
- on ajoute l'inclusion de la page

## Controller Robot

- On créer un titre dans une variable du controller
- la view requise est placée dans la variable `$page`

## la vue 
- Ne contient plus que l'information relative à une page .

```yaml
Project v2
    app  
        Controllers  
            Accueil.php     
            Robot.php        
        Views  
            accueil/index.php   # vues optimisées sans head
            robots/index.php  
            base.php            # vue de base avec menu de navigation
    assets
        style css et bootstrap 
    system	
        Mpdo.php              
        utile
            Util.php               
    index.php  
        Constantes Paths et urls
        router provisoire
```