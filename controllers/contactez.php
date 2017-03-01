<?php

/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 22/10/2016
 * Time: 19:19
 */
class contactez extends Controller
{

    public function index()
    {
        $data = array();
        $this->loadModel("CategorieRepository");
        $this->set($data);
        $this->render("index");
    }

    public function view($id)
    {
        echo $id;
    }
}

?>
