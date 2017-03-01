<?php

/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 20/10/2016
 * Time: 09:29
 */
class Image
{
    private $id;
    private $produitID;
    private $nom;

    /**
     * Image constructor.
     * @param $id
     * @param $produitID
     * @param $nom
     */
    public function __construct($id, $produitID, $nom)
    {
        $this->id = $id;
        $this->produitID = $produitID;
        $this->nom = $nom;
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
    public function getProduitID()
    {
        return $this->produitID;
    }

    /**
     * @param mixed $produitID
     */
    public function setProduitID($produitID)
    {
        $this->produitID = $produitID;
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


}