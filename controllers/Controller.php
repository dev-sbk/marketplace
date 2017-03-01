<?php

/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 22/10/2016
 * Time: 19:23
 */
class Controller
{
    var $vars = array();
    function set($data)
    {
        $this->vars = array_merge($this->vars, $data);
    }

    public function render($filename)
    {
        extract($this->vars);
        require_once ROOT . "views/" . get_class($this) . "/" . $filename . ".php";

    }

    public function loadModel($name)
    {
        require_once ROOT . "models/" . strtolower($name) . ".php";
        $this->$name = new $name();
    }
}