
# Niveau 3
## Héritage de classe
- Admettons que nous voulons gérer des employés.
- Un employé est aussi une personne. Ici :  `prenom, nom, photo`
## Class Personne
```php

class Personne
{

    private $prenom;
    private $nom;
    private $photo;

    public function __construct(string $_prenom, string $_nom, string $_photo)
    {
        $this
            ->setPrenom($_prenom)
            ->setNom($_nom)
            ->setPhoto($_photo);
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
## Classe Employee
- une classe Employe va hériter de la classe Personne pour bénéficier des  `prenom, nom, photo` 
- __VOIR__ comment dans le constructeur on s'adresse à la classe parent
```php

class Employe extends Personne
{

    /**
     * Le constructeur fait appel au parent
     *
     * @param string $_prenom
     * @param string $_nom
     * @param string $_photo
     */
    function __construct(string $_prenom, string $_nom, string $_photo)
    {
        parent::__construct($_prenom, $_nom, $_photo);
    }

}
```
## Employe : Instance
```php
require "./app/entity/Personne.php";
require "./app/entity/Employe.php";

$p  = new Employe("Achille", "Talon", "achille_talon.png");

require "./app/views/home.php";
```

### Ajout d'une méthode propre à Employee
- une méthode qui donne l'expérience professionnelle par exemple

```php

    private $experience;

    /**
     * Le constructeur fait appel au parent
     *
     * @param string $_prenom
     * @param string $_nom
     * @param string $_photo
     */
    function __construct(string $_prenom, string $_nom, string $_photo)
    {
        parent::__construct($_prenom, $_nom, $_photo);
        $this->setExperience(rand(0, 10));
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

```
## Employe : Instance
```php
require "./app/entity/Personne.php";
require "./app/entity/Employe.php";

$p  = new Employe("Achille", "Talon", "achille_talon.png");
$exp = $p->getExperience();
$info_exp = $exp > 0 ? "Experience de $exp ans" : "Son premier Job";

require "./app/views/home.php";
```