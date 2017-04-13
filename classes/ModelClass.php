<?php


abstract class ModelClass
{
    /**
     * Status of the table
     * @var bool
     */
    protected static $_active = true;

    /**
     * Will Register This model on AUTH_REQUESTS['GET'] list
     * @var bool
     */
    protected static $_auth_get = false;

    /**s
     * Will Register This model on AUTH_REQUESTS['POST'] list
     * @var bool
     */
    protected static $_auth_post = false;

    /**
     * Will Register This model on AUTH_REQUESTS['PATCH'] list
     * @var bool
     */
    protected static $_auth_patch = false;

    /**
     * Will Register This model on AUTH_REQUESTS['DELETE'] list
     * @var bool
     */
    protected static $_auth_delete = false;




}