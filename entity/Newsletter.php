<?php

/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 20/10/2016
 * Time: 09:30
 */
class Newsletter
{
    private $id;
    private $email;

    /**
     * Newsletter constructor.
     * @param $id
     * @param $email
     */
    public function __construct($id, $email)
    {
        $this->id = $id;
        $this->email = $email;
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


}