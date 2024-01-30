<?php

namespace Entity;

class Notifie
{

    public  $email;
    public  $id_o;
    public  $AAAAMMJJ_H;
    public  $motif;
    public  $destinataire;
    public  $lu;

    /**
     * Notifie constructor.
     * @param $email
     * @param $id_o
     * @param $AAAAMMJJ_H
     * @param $motif
     * @param $destinataire
     * @param $lu
     */
    public function __construct($email, $id_o, $AAAAMMJJ_H, $motif, $destinataire, $lu)
    {
        $this->email = $email;
        $this->id_o = $id_o;
        $this->AAAAMMJJ_H = $AAAAMMJJ_H;
        $this->motif = $motif;
        $this->destinataire = $destinataire;
        $this->lu = $lu;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
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
    public function getAAAAMMJJH()
    {
        return $this->AAAAMMJJ_H;
    }

    /**
     * @param mixed $AAAAMMJJ_H
     */
    public function setAAAAMMJJH($AAAAMMJJ_H): void
    {
        $this->AAAAMMJJ_H = $AAAAMMJJ_H;
    }

    /**
     * @return mixed
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * @param mixed $motif
     */
    public function setMotif($motif): void
    {
        $this->motif = $motif;
    }

    /**
     * @return mixed
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * @param mixed $destinataire
     */
    public function setDestinataire($destinataire): void
    {
        $this->destinataire = $destinataire;
    }

    /**
     * @return mixed
     */
    public function getLu()
    {
        return $this->lu;
    }

    /**
     * @param mixed $lu
     */
    public function setLu($lu): void
    {
        $this->lu = $lu;
    }


}