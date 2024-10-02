# Niveau 1

## Extensions PHP à installer
- PHP DocBlocker
- PHP getters & setters
- PHP Intelliphense


## Classe Person v1
- créer le fichier de classe `app/entity/Personne.php`
- Tester des attributs publics

## Test basique
```php
// tester et m'arrêter ou non
echo '<pre>';
var_dump($p);
die; // ou pas ?

// construire l'affichage
echo $p->prenom . ' ' . $p->nom;

```
## Class Util v1
- optimiser le debug
- On crée le fichier de classe `lib/Util.php`

- débug avec instance de Util
```php
// tester et m'arrêter ou non
$u = new util;
$u->dd($p, false);

// construire l'affichage
echo $p->prenom . ' ' . $p->nom;
```