<?php

/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 20/10/2016
 * Time: 09:30
 */
class Commande
{
    private $id;
    private $clientID;
    private $prodID;
    private $nbProduits;
    private $dateAjout;

    /**
     * Commande constructor.
     * @param $id
     * @param $clientID
     * @param $prodID
     * @param $nbProduits
     * @param $dateAjout
     */
    public function __construct($id, $clientID, $prodID, $nbProduits, $dateAjout)
    {
        $this->id = $id;
        $this->clientID = $clientID;
        $this->prodID = $prodID;
        $this->nbProduits = $nbProduits;
        $this->dateAjout = $dateAjout;
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
    public function getProdID()
    {
        return $this->prodID;
    }

    /**
     * @param mixed $prodID
     */
    public function setProdID($prodID)
    {
        $this->prodID = $prodID;
    }

    /**
     * @return mixed
     */
    public function getNbProduits()
    {
        return $this->nbProduits;
    }

    /**
     * @param mixed $nbProduits
     */
    public function setNbProduits($nbProduits)
    {
        $this->nbProduits = $nbProduits;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * @param mixed $dateAjout
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;
    }

}