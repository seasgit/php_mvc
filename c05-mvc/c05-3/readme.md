#
# Projet version 3
#
## Base de données des robots
- On a deux tables : Robot et Secteur, avec une relation ManyToone
## Dump des tables
- Voir le dossier `dump-sql`

## dans notre projet PHP
- On ajoute les modeles qui vont se charge de requeter la base etrenvoyer le résultat au controleur.

## dans le dossier system
- on ajoute la classe `system/Mpdo` pour gérer la connexion avec la base de données

## Model Robot 
1.  Simple requete des noms de robots
2.  requete avec jointure de la table secteur



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
        Mpdo.php           # Classe type Singleton    
        utile
            Util.php               
    index.php  
        Constantes Paths et urls
        router provisoire
```