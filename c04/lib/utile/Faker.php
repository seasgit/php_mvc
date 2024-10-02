<?php

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
