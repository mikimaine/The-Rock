<?php

//namespace Tables;

/**
 * Class UserGroupTable
 */
class TagTable
{

    /**
     * @var array
     */
    private static $CONFIG = [
                    'pk'        => 'id',
                    'columns'   => ['id', 'tag'],
                    'returning' => ['id', 'tag'],
                    'int'       => ['id'],
                    'search'    => ['tag'],
                    'fk'        => [
                        '{rock}'  => ['table' => 'rock', 'referenced_by' => 'id', 'referencing_column' => 'col_fk_m']
                    ]
    ];

    /**
     * Name of the table
     * @var string
     */
    private static $_table = 'tag';


    /**
     * Status of the table
     * @var bool
     */
    const _ACTIVE= true;

    /**
     * Will Register This model on AUTH_REQUESTS['GET'] list
     * @var bool
     */
    const _GET = false;

    /**s
     * Will Register This model on AUTH_REQUESTS['POST'] list
     * @var bool
     */
    const _POST = false;

    /**
     * Will Register This model on AUTH_REQUESTS['PATCH'] list
     * @var bool
     */
    const _PATCH = false;

    /**
     * Will Register This model on AUTH_REQUESTS['DELETE'] list
     * @var bool
     */
    const _DELETE = false;

    /**
     * Return Model/Table Configuration
     * @return array
     */
    public static function getConfig()
    {
        return TagTable::$CONFIG;
    }

    /**
     * Return Model/Table Name
     * @return string
     */
    public static function getTable()
    {
        return TagTable::$_table;
    }
}