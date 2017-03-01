<?php

/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 15/10/2016
 * Time: 22:22
 */
class Administrateur
{
    private $id;
    private $identifiant;
    private $motpasse;

    function __construct($id, $identifiant, $motpasse)
    {
        $this->id = $id;
        $this->identifiant = $identifiant;
        $this->motpasse = $motpasse;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * @param mixed $identifiant
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    }

    /**
     * @return mixed
     */
    public function getMotpasse()
    {
        return $this->motpasse;
    }

    /**
     * @param mixed $motpasse
     */
    public function setMotpasse($motpasse)
    {
        $this->motpasse = $motpasse;
    }


}