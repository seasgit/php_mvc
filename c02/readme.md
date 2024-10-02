# Niveau 2 
## A voir
1. L'encapsulation avec des getters/setters
2. Comment chaîner des méthodes `(return $this)`
3. Première page de rendu avec Bootstrap
4. Créer une version de classe `PersonneV2.php`

## Class Personne getter/setter 
- Voir l'intérêt des valeurs par défaut dans le setters
- Exemple avec le setter `setPhoto()`
```php

class Personne
{

    private $prenom;
    private $nom;
    private $photo;

    public function __construct()
    {
        // facultatif
    }


    /**
     * Get the value of prenom
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom(string $prenom = "John")
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom(string $nom = "DOE")
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of photo
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * set the value of photo
     *
     * @param [string] $_photo
     * @return void
     */
    public function setPhoto(?string $_photo = "")
    {
        $this->photo =  !empty($_photo) ? $_photo : 'https://robohash.org/4?set=set3';

        return $this;
    }
}
```
## Personne : Instance et affichage 
Pas d'arguments dans les setters. Et ça marche !
```php
require "./app/entity/Personne.php";

$p1  = new Personne();
$p1->setPrenom()
    ->setNom()
    ->setPhoto();

echo "<h1>{$p1->getPrenom()} {$p1->getNom()}</h1>";
echo "<img src='{$p1->getPhoto()}' />";
echo "<hr>";
```
## Modification structure projet
- On ajoute `assets/images/` avec une photo de Achille Talon

## Personne : Instance et affichage
```php
require "./lib/utile/Util.php";
require "./app/entity/Personne.php";

$p1  = new Personne();
$p1->setPrenom("Achille")
    ->setNom("Talon")
    ->setPhoto("achille_talon.png");

// avant de créer une vue
echo "<h1>{$p1->getPrenom()} {$p1->getNom()}</h1>";
echo "<img src='./assets/images/{$p1->getPhoto()}' />";
echo "<hr>";
```
## On crée une vue
créer le fichier `app/views/home.php`
```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Cours PHP objet</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-2 text-center">
                <h3><?= $p->getPrenom() ?> <?= $p->getNom() ?></h3>
                <img src="./assets/images/<?= $p->getPhoto() ?>" class="w-100">
            </div>
        </div>
    </div>

</body>

</html>
```
## Personne : Instance et affichage
```php
// code d'instance
require "./app/views/home.php";
```

## classe Personnev2
- Modification de la signature de la méthode constructeur 
- on ajoute 3 paramètres prévu pour accepter des arguments issus de la source data_personnes.php
- Type hint `string` (forcer le programme à respecter le type dans la _signature de la méthode_)
```php

    public function __construct(string $_prenom, string $_nom, string $_photo)
    {
        $this
            ->setPrenom($_prenom)
            ->setNom($_nom)
            ->setPhoto($_photo);
    }

```
## Personne_v2 :Instance et affichage 
```php
require "./app/entity/PersonneV2.php";
$p  = new Personne("Achille", "Talon", "achille_talon.png");
require "./app/views/home.php";
```

