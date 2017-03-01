<?php
/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 16/10/2016
 * Time: 11:04
 */

class MarketMetier {
    /**
     * THIS METHOD TO CAST OBJECT TO ARRAY
     * @param $object
     * @return array
     */
    public static  function dismount($object) {
        $reflectionClass = new ReflectionClass(get_class($object));
        $array = array();
        $array["name"]=$reflectionClass->getName();
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            $array[$property->getName()] = $property->getValue($object);
            $property->setAccessible(false);
        }
        return $array;
    }
}