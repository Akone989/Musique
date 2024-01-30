<?php

namespace Entity;

class Theme
{

    public  $sujet;

    /**
     * Theme constructor.
     * @param $sujet
     */
    public function __construct($sujet)
    {
        $this->sujet = $sujet;
    }

    /**
     * @return mixed
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @param mixed $sujet
     */
    public function setSujet($sujet): void
    {
        $this->sujet = $sujet;
    }
}