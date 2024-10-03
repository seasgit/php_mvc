# Niveau 4
## Composer
- C’est un gestionnaire de dépendances pour des applications écrites PHP. 
- Ces dépendances se trouvent sur un serveur dépôt : `https://packagist.org/`
    - Des dépendances pour une application existante.
    - Des packages complets types Laravel, Symfony …
- Il permet aussi de gérer l’autoloading des classes d’un projet. 
## Installation de Composer
- Voir le site web : https://getcomposer.org/
> ### Installation globale window via un exécutable
> - installation globale sur mac : https://getcomposer.org/doc/00-intro.md#globally
> - Composer est un système qui fonctionne en ligne de commandes. 
> - Ouvrez le terminal ou la console et tapez composer. 	
## Config du dossier projet
- Ouvrir le terminal à la racine du projet
- taper → `composer init` . Et répondre aux questions.
- On obtient un fichier du genre :
```json
{
    "name": "serge/dev",
    "description": "projet mvc",
    "authors": [],
```
## Fichier composer.json
- L’installation de dépendances passe par la création du fichier `composer.json`.
- Tapez : `composer dump-autoload`.  Voilà ! Le dossier __vendor__ est créé. 
- Voir aussi le fichier `autoload_psr4.php`

## Dans index.php
```php
// !!! Toutes les classes du dossier System sont autoloadées
require "vendor/autoload.php";
```
- __NB__ On peut enlever le require inutile de Faker
## Utiliser un service comme faker

- taper `php Faker` 
- Voir l'installation proposée dans la doc.
```php
composer require fakerphp/faker
```

### Classe Faker
- créer la classe `lib/Faker.php`
- Ajouter une méthode entreprise. Elle retournera une `fake->company`
