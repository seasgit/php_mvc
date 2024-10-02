# Niveau 1
## Prérequis
- bases PHP
- bases PHP Objet
## Extensions PHP
- PHP DocBlocker
- PHP getters & setters
- PHP Intelliphense

## Dossier projet
- nommé `Companies`
- un sous dossier `app`

## Classe Person v1
- créer le fichier de classe `app/entity/Personne.php`
```php

class Personne
{

    public $prenom;
    public $nom;
    public $photo;

    public function __construct(){}
}
```
## Programme 1.php 
- Instance et débuggage simple
```php
require "./app/entity/Personne.php";

$p = new Personne;
$p->prenom =  "Joe";
$p->nom = "Dalton";
$p->photo =  "http://robohash.org/1";

// tester et m'arrêter ou non
echo '<pre>';
var_dump($p);
die; // ou pas ?

// construire l'affichage
echo $p->prenom . ' ' . $p->nom;
```
## Class Util v1
- optimiser le debug
- créer le fichier de classe `lib/Util.php`
```php

/**
 * Class de type Service d'où le nom
 */
class Util
{

    /**
     * Permet de débugger
     *
     * @param [type] $data
     * @param boolean $continue
     * @return void
     */
    public function dd($data, $continue = false)
    {
        echo '<pre>';
        print_r($data);
        if (!$continue) exit;
    }
}

```

## Programme 2.php 
- débug avec instance de Util
```php
// tester et m'arrêter ou non
$u = new util;
$u->dd($p, false);

// construire l'affichage
echo $p->prenom . ' ' . $p->nom;
```