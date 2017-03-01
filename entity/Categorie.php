<?php

/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 20/10/2016
 * Time: 09:29
 */
class Categorie
{
    private $id;
    private $super_categ;
    private $nom;

    /**
     * Categorie constructor.
     * @param $id
     * @param $super_categ
     * @param $nom
     */
    public function __construct($id, $super_categ, $nom)
    {
        $this->id = $id;
        $this->super_categ = $super_categ;
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
    public function getSuperCateg()
    {
        return $this->super_categ;
    }

    /**
     * @param mixed $super_categ
     */
    public function setSuperCateg($super_categ)
    {
        $this->super_categ = $super_categ;
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