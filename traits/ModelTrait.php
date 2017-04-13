<?php

trait ModelTrait
{

    /**
     * Return Model/Table Configuration
     * @return array
     */
    public static function getConfig()
    {
        return self::$CONFIG;
    }

    /**
     * Return Model/Table Name
     * @return string
     */
    public static function getTable()
    {
        return self::$_table;
    }

}