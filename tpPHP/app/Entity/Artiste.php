<?php

namespace Entity;

class Artiste
{

    public  $nom_artiste;
    public  $nationalite;
    public  $date_activite;
    public  $infos;

    /**
     * Artiste constructor.
     * @param $nom_artiste
     * @param $nationalite
     * @param $date_activite
     * @param $infos
     */
    public function __construct($nom_artiste, $nationalite, $date_activite, $infos)
    {
        $this->nom_artiste = $nom_artiste;
        $this->nationalite = $nationalite;
        $this->date_activite = $date_activite;
        $this->infos = $infos;
    }

    /**
     * @return mixed
     */
    public function getNomArtiste()
    {
        return $this->nom_artiste;
    }

    /**
     * @param mixed $nom_artiste
     */
    public function setNomArtiste($nom_artiste): void
    {
        $this->nom_artiste = $nom_artiste;
    }

    /**
     * @return mixed
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * @param mixed $nationalite
     */
    public function setNationalite($nationalite): void
    {
        $this->nationalite = $nationalite;
    }

    /**
     * @return mixed
     */
    public function getDateActivite()
    {
        return $this->date_activite;
    }

    /**
     * @param mixed $date_activite
     */
    public function setDateActivite($date_activite): void
    {
        $this->date_activite = $date_activite;
    }

    /**
     * @return mixed
     */
    public function getInfos()
    {
        return $this->infos;
    }

    /**
     * @param mixed $infos
     */
    public function setInfos($infos): void
    {
        $this->infos = $infos;
    }


}