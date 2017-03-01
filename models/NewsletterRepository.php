<?php

/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 20/10/2016
 * Time: 09:41
 */
class NewsletterRepository extends MarketRepository
{
    /**
     * THE ROLE OF THIS METHOD IS TO INSERT NEW Newsletter
     * @param Newsletter $newsletter
     */
    public function persist(Newsletter $newsletter)
    {
        parent::save($newsletter); // TODO: Change the autogenerated stub
    }

    /**
     * THE ROLE OF THIS METHOD IS TO UPDATE  Newsletter
     * @paramNewsletter $newsletter
     */
    public function merge(Newsletter $newsletter)
    {
        parent::update($newsletter);
    }

    /**
     *  THE ROLE OF THIS METHOD IS TO DELETE  Newsletter FROM THE TABLE
     * @param $object
     */
    public function remove($object)
    {
        parent::delete($object); // TODO: Change the autogenerated stub
    }

    /**
     * THE ROLE OF THIS METHOD IS TO GET ALL Newsletter
     * @return array
     */
    public function getAll()
    {
        $data = array();
        $rs = parent::findAll(array("name" => "Newsletter"));
        foreach ($rs as $k => $v) {
            foreach ($v as $vi) {
                $data[$k] = new Newsletter($v['ID'],$v['EMAIL']);
            }
        }
        return $data;
    }
    /**
     * THE ROLE OF THIS METHOD IS TO FIND  Newsletter BY ID
     * @param $value
     * @return array
     */
    public function getOne($value)
    {
        $data = array();
        $rs = parent::findOne(array("name" => "Newsletter", "id" => "ID", "value" => $value));
        foreach ($rs as $k => $v) {
            foreach ($v as $vi) {
                $data[$k] = new Newsletter($v['ID'],$v['EMAIL']);
            }
        }
        return $data;
    }
}