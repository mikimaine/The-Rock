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

        return strtolower(self::decamelize());

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

    public static function getForbiddenRequest()
    {
        return self::$_forbidden_request;
    }

    /**
     * @return mixed
     */
    private static function getTableName()
    {
        return str_replace('Table', '', get_called_class());
    }

    /**
     * @return mixed
     */
    private static function decamelize()
    {
        return preg_replace(['/([a-z\d])([A-Z])/', '/([^_])([A-Z][a-z])/'], '$1_$2', self::getTableName());
    }

}