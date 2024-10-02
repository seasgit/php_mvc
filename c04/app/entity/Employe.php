<?php


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
