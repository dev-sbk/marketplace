<?php

/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 20/10/2016
 * Time: 09:29
 */
class Client
{
    private $clientID;
    private $nom;
    private $email;
    private $motpasse;

    /**
     * Client constructor.
     * @param $clientID
     * @param $nom
     * @param $email
     * @param $motpasse
     */
    public function __construct($clientID, $nom, $email, $motpasse)
    {
        $this->clientID = $clientID;
        $this->nom = $nom;
        $this->email = $email;
        $this->motpasse = $motpasse;
    }

    /**
     * @return mixed
     */
    public function getClientID()
    {
        return $this->clientID;
    }

    /**
     * @param mixed $clientID
     */
    public function setClientID($clientID)
    {
        $this->clientID = $clientID;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
    public function setEmail($email)
    {
        $this->email = $email;
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