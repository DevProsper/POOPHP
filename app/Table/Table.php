<?php
/**
 * Created by Prosper.
 * User: hp
 * Date: 28/05/2017
 * Time: 15:02
 */

namespace App\Table;


class Table
{
    protected $table;

    public function __construct()
    {
        if(is_null($this->table)){
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }
    }

}