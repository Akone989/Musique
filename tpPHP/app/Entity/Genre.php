<?php

namespace Entity;

class Genre
{

    public  $nom_genre;

    /**
     * Genre constructor.
     * @param $nom_genre
     */
    public function __construct($nom_genre)
    {
        $this->nom_genre = $nom_genre;
    }

    /**
     * @return mixed
     */
    public function getNomGenre()
    {
        return $this->nom_genre;
    }

    /**
     * @param mixed $nom_genre
     */
    public function setNomGenre($nom_genre): void
    {
        $this->nom_genre = $nom_genre;
    }

}