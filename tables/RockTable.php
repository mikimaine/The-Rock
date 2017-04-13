<?php

//namespace Tables;
/**
 * Class RockTable
 */
class RockTable
{

    /**
     * @var array
     */
    private static $CONFIG = [
        'pk' => 'id',
        'columns' => ['id', 'col_integer', 'col_float', 'col_double', 'col_json', 'col_bool', 'col_geometry', 'col_string', 'col_fk', 'col_fk_m'],
        'returning' => ['id', 'col_integer', 'col_float', 'col_double', 'col_json', 'col_bool', 'col_geometry', 'col_string', 'col_fk', 'col_fk_m'],
        'bool' => ['col_bool'],
        'int' => ['id', 'col_integer', 'col_fk'],
        '[int]' => ['col_fk_m'],
        'float' => ['col_float'],
        'double' => ['col_double'],
        'JSON' => ['col_json'],
        'geometry' => ['col_geometry'],
        'search' => ['col_string'],
        'fk' => [
            'col_fk' => ['table' => 's3', 'references' => 'id'],
            '[col_fk_m]' => ['table' => 'tag', 'references' => 'id']
        ]
    ];

    /**
     * Name of the table
     * @var string
     */
    private static $_table = 'rock';


    /**
     * Status of the table
     * @var bool
     */
    const _ACTIVE = true;


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
        return RockTable::$CONFIG;
    }

    /**
     * Return Model/Table Name
     * @return string
     */
    public static function getTable()
    {
        return RockTable::$_table;
    }



}