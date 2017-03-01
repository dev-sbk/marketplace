<?php

/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 16/10/2016
 * Time: 13:10
 */
class Produit
{
    private $prodid;
    private $categid;
    private $nom;
    private $designation;
    private $prix;
    private $quantite;

    function __construct($prodid, $categid, $nom, $designation, $prix, $quantite)
    {
        $this->prodid = $prodid;
        $this->categid = $categid;
        $this->nom = $nom;
        $this->designation = $designation;
        $this->prix = $prix;
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getProdid()
    {
        return $this->prodid;
    }

    /**
     * @param mixed $prodid
     */
    public function setProdid($prodid)
    {
        $this->prodid = $prodid;
    }

    /**
     * @return mixed
     */
    public function getCategid()
    {
        return $this->categid;
    }

    /**
     * @param mixed $categid
     */
    public function setCategid($categid)
    {
        $this->categid = $categid;
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
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }


}