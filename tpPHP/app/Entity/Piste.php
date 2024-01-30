<?php

namespace Entity;

class Piste
{

    public  $id_p;
    public  $titre;
    public  $duree;
    public  $emplacement;
    public  $num_disque;

    /**
     * Piste constructor.
     * @param $id_p
     * @param $titre
     * @param $duree
     * @param $emplacement
     * @param $num_disque
     */
    public function __construct($id_p, $titre, $duree, $emplacement, $num_disque)
    {
        $this->id_p = $id_p;
        $this->titre = $titre;
        $this->duree = $duree;
        $this->emplacement = $emplacement;
        $this->num_disque = $num_disque;
    }

    /**
     * @return mixed
     */
    public function getIdP()
    {
        return $this->id_p;
    }

    /**
     * @param mixed $id_p
     */
    public function setIdP($id_p): void
    {
        $this->id_p = $id_p;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree($duree): void
    {
        $this->duree = $duree;
    }

    /**
     * @return mixed
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    /**
     * @param mixed $emplacement
     */
    public function setEmplacement($emplacement): void
    {
        $this->emplacement = $emplacement;
    }

    /**
     * @return mixed
     */
    public function getNumDisque()
    {
        return $this->num_disque;
    }

    /**
     * @param mixed $num_disque
     */
    public function setNumDisque($num_disque): void
    {
        $this->num_disque = $num_disque;
    }

}