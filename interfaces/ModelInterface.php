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
     * @return boolean
     */
    public static function isAuthGet();

    /**
     * @return boolean
     */
    public static function isAuthPost();

    /**
     * @return boolean
     */
    public static function isAuthPatch();

    /**
     * @return boolean
     */
    public static function isAuthDelete();


    /**
     * @return mixed
     */
    public static function getForbiddenRequest();

}