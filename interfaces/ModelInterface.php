<?php


/**
 * Interface Models
 */
interface ModelInterface
{

    /**
     * Return Model/Table Configuration
     * @return array
     */
    public static function getConfig();

    /**
     * Return Model/Table Name
     * @return string
     */
    public static function getTable();

    /**
     * @return boolean
     */
    public static function isActive();

    /**
     * @return mixed
     */
    public static function getForbiddenRequest();

}