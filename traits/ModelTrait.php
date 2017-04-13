<?php

/**
 * Class ModelTrait
 */
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
        if (isset(self::$_table)){
            return self::$_table;
        }

        return strtolower(str_replace('Table','',get_called_class()));

    }

    /**
     * @return boolean
     */
    public static function isActive()
    {
        return self::$_active;
    }

    /**
     * @return boolean
     */
    public static function isAuthGet()
    {
        return self::$_auth_get;
    }

    /**
     * @return boolean
     */
    public static function isAuthPost()
    {
        return self::$_auth_post;
    }

    /**
     * @return boolean
     */
    public static function isAuthPatch()
    {
        return self::$_auth_patch;
    }

    /**
     * @return boolean
     */
    public static function isAuthDelete()
    {
        return self::$_auth_delete;
    }

}