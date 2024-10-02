
#
# Projet version 5
#

1. Remplacer les chargements des classes dans index.php par un système d'autoload.
    - `Pourquoi ?` Un projet réel peut contenir beaucoup de classes nécessitant un chargement préalable
2. Utiliser le système Apache de réécriture d'url

# 1. Autoloading
## Si besoin : Installation de Composer
- Ouvrez le terminal ou la console et tapez composer. 
- Voir le site web : https://getcomposer.org/
> - installation globale sur mac : https://getcomposer.org/doc/00-intro.md#globally
> - Composer est un système qui fonctionne en ligne de commandes. 
## 
## Config du dossier projet
- Ouvrir le terminal à la racine du projet
- taper → `composer init` . Et répondre aux questions.
- On obtient un fichier du genre :
```json
{
    "name": "bla bla",
    "description": "projet robots",
    "authors": [],
```
## Fichier composer.json
- L’installation de dépendances passe par la création du fichier `composer.json`.
### Chargement de classes et fichiers
Dans le fichier composer.json, on va ajouter une structure nommée `autoload` .
- __psr-4__ correspond à un ensemble de recommandations PHP pour faciliter l’interopérabilité de composants.  

Voir le http://www.php-fig.org.
### Attention
Le chargement de classes doit se faire en respectant une syntaxe précise et l’utilisation de namespaces.
```json 
    "autoload": {
        "psr-4": {
            "system\\": "system",
        }
    }
```
- Tapez : `composer dump-autoload`.  Voilà ! Le dossier __vendor__ est créé. 
- Voir aussi le fichier `autoload_psr4.php`

## Dans index.php
```php
// !!! Toutes les classes du dossier System sont autoloadées
require "vendor/autoload.php";
```
# 2 URL Rewriting

La technologie Apache offre un moyen de configurer une adresse du type :
- [](http://nomDomaine.com/index.php?url=accueil&action=affiche&param=12)
En une adresse du type :
- []http://nomDomaine.com/accueil/affiche/12)
L’indexation par les robots de référencement est meilleure, et la lecture de l’adresse est simple.
##
Créer le fichier .htaccess à la racine du projet
```yaml
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
# RewriteCond $1 !^(index.php|assets)
RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]
```
__Vérifier__ : l’activation de l’extension `rewrite_rule`

## Modification du router
- Le système de routage va découper l'url en segment afin de traiter ce qui peut être : controller | méthode | paramètres
- Ce router est placé dans une classe `system\Router.php` et exécuté depuis index.php 

## Modification des liens de navigation

```html
      <a class="nav-link" href="<?= BASE_URL ?>?url=robot" ?>">Robots</a>
      <!-- devient -->
      <a class="nav-link" href="<?= BASE_URL ?>/robot">Robots</a>
      
```

