<?php

/**
 * Created by Prosper.
 * User: hp
 * Date: 28/05/2017
 * Time: 14:42
 */
class CarFactory
{
    public static function getCar($type){
        $type = ucfirst($type);
        $class_name = "Car$type";
        return new $class_name;
    }

}