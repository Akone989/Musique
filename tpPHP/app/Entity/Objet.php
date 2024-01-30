<?php

namespace Entity;

class Objet
{
    public  $id_o;
    public  $nom_album;
    public  $couverture;
    public  $date_sortie;
    public  $info_comp;
    public  $valide;
    public  $support;

    public function __construct($id_o, $nom_album, $couverture, $date_sortie, $info_comp, $valide, $support)
    {
        $this->id_o = $id_o;
        $this->nom_album = $nom_album;
        $this->couverture = $couverture;
        $this->date_sortie = $date_sortie;
        $this->info_comp = $info_comp;
        $this->valide = $valide;
        $this->support = $support;
    }

       /**
     * @return mixed
     */
    public function getIdO()
    {
        return $this->id_o;
    }

    /**
     * @param mixed $id_o
     */
    public function setIdO($id_o): void
    {
        $this->id_o = $id_o;
    }

    /**
     * @return mixed
     */
    public function getNomAlbum()
    {
        return $this->nom_album;
    }

    /**
     * @param mixed $nom_album
     */
    public function setNomAlbum($nom_album): void
    {
        $this->nom_album = $nom_album;
    }

    /**
     * @return mixed
     */
    public function getCouverture()
    {
        return $this->couverture;
    }

    /**
     * @param mixed $couverture
     */
    public function setCouverture($couverture): void
    {
        $this->couverture = $couverture;
    }

    /**
     * @return mixed
     */
    public function getDateSortie()
    {
        return $this->date_sortie;
    }

    /**
     * @param mixed $date_sortie
     */
    public function setDateSortie($date_sortie): void
    {
        $this->date_sortie = $date_sortie;
    }

    /**
     * @return mixed
     */
    public function getInfoComp()
    {
        return $this->info_comp;
    }

    /**
     * @param mixed $info_comp
     */
    public function setInfoComp($info_comp): void
    {
        $this->info_comp = $info_comp;
    }

    /**
     * @return mixed
     */
    public function getValide()
    {
        return $this->valide;
    }

    /**
     * @param mixed $valide
     */
    public function setValide($valide): void
    {
        $this->valide = $valide;
    }

    /**
     * @return mixed
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * @param mixed $support
     */
    public function setSupport($support): void
    {
        $this->support = $support;
    }
}