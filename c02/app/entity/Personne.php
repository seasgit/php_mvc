<?php

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
