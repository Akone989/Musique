<?php

namespace Entity;

class Format
{

    public  $id_f;
    public  $rpm;
    public  $taille;

    /**
     * Format constructor.
     * @param $id_f
     * @param $rpm
     * @param $taille
     */
    public function __construct($id_f, $rpm, $taille)
    {
        $this->id_f = $id_f;
        $this->rpm = $rpm;
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getIdF()
    {
        return $this->id_f;
    }

    /**
     * @param mixed $id_f
     */
    public function setIdF($id_f): void
    {
        $this->id_f = $id_f;
    }

    /**
     * @return mixed
     */
    public function getRpm()
    {
        return $this->rpm;
    }

    /**
     * @param mixed $rpm
     */
    public function setRpm($rpm): void
    {
        $this->rpm = $rpm;
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille): void
    {
        $this->taille = $taille;
    }


}