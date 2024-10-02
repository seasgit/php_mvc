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
    "name": "serge/dev_2021",
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

### Classe Faker
- créer la classe `lib/Faker.php`
- Ajouter une méthode entreprise. Elle retournera une `fake->company`
```php

class Faker
{
    private $fk;
    /**
     * Classe pretexte à montrer l'injection de dépendance
     * par exemple pour l'entreprise d'un employe
     *
     * @param string $loc
     */
    function  __construct($loc = 'fr_FR')
    {
        $this->fk =  \Faker\Factory::create($loc);
    }

    public function entreprise()
    {
        return $this->fk->company;
    }
}

```

## Classe Employee 
### Injection de dépendance.
- créer un attribut `private $entreprise` avec ses getter/setter
- Injecter un objet du type Faker dans la methode `__construct()`
- Ajouter la methode setEntreprise 
```php
class Employe extends Personne
{

    private $experience;
    private $entreprise;

    /**
     * Le constructeur fait appel au parent
     *
     * @param string $_prenom
     * @param string $_nom
     * @param string $_photo
     */
    function __construct(string $_prenom, string $_nom, string $_photo, Faker $faker)
    {
        parent::__construct($_prenom, $_nom, $_photo);
        $this
            ->setExperience(rand(0, 10))
            ->setEntreprise($faker->entreprise());
    }


    /**
     * Get the value of experience
     */
    public function getExperience(): int
    {
        return $this->experience;
    }

    /**
     * Set the value of experience
     *
     * @return  self
     */
    public function setExperience(?int $experience = 0)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get the value of entreprise
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set the value of entreprise
     *
     * @return  self
     */
    public function setEntreprise($cie)
    {
        $this->entreprise = $cie;

        return $this;
    }
}

```

## Programme 1.php
__NB__ l'instanciation
```php
require "./app/entity/Personne.php";
require "./app/entity/Employe.php";
require "./lib/utile/Util.php";
require "./vendor/autoload.php";
require "./lib/utile/Faker.php";


$p  = new Employe("Achille", "Talon", "achille_talon.png", new Faker('fr_FR'));

$exp = $p->getExperience();
$info_exp = $exp > 0 ? "Experience de $exp ans" : "Son premier Job";

//$u = new util;
//$u->dd($p, false);



require "./app/views/home.php";
```