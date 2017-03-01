<?php

/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 20/10/2016
 * Time: 09:30
 */
class Contact
{
    private $id;
    private $nom;
    private $email;
    private $objet;
    private $message;

    /**
     * Contact constructor.
     * @param $id
     * @param $nom
     * @param $email
     * @param $objet
     * @param $message
     */
    public function __construct($id, $nom, $email, $objet, $message)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->objet = $objet;
        $this->message = $message;
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
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * @param mixed $objet
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


}