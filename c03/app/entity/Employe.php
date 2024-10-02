<?php


class Employe extends Personne
{

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
}
