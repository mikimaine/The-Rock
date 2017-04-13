<?php


/**
 * Interface Models
 */
interface ModelsInterface
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

}