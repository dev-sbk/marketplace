<?php

/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 22/10/2016
 * Time: 19:19
 */
class home extends Controller
{

    public function index()
    {
        $data = array();
        $this->loadModel("ProduitRepository");
        $data['prods']=$this->ProduitRepository->getPage(4);
        $this->set($data);
        $this->render("index");
    }

}

?>
