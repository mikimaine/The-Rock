<?php


/**
 * Class ModelClass
 */
abstract class ModelClass
{
    /**
     * Status of the table
     * @var bool
     */
    protected static $_active = true;

    /**
     *
     * @var array
     */
    protected static $_auth_request = [];


    /**
     * @var array
     */
    protected static $_forbidden_request = [];

}