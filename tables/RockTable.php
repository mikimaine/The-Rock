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
    public static $CONFIG = [
            'pk'        => 'id',
            'columns'   => ['id', 'col_integer', 'col_float', 'col_double', 'col_json', 'col_bool', 'col_geometry', 'col_string', 'col_fk', 'col_fk_m'],
            'returning' => ['id', 'col_integer', 'col_float', 'col_double', 'col_json', 'col_bool', 'col_geometry', 'col_string', 'col_fk', 'col_fk_m'],
            'bool'      => ['col_bool'],
            'int'       => ['id', 'col_integer', 'col_fk'],
            '[int]'     => ['col_fk_m'],
            'float'     => ['col_float'],
            'double'    => ['col_double'],
            'JSON'      => ['col_json'],
            'geometry'  => ['col_geometry'],
            'search'    => ['col_string'],
            'fk'        => [
                'col_fk'      => ['table' => 's3', 'references' => 'id'],
                '[col_fk_m]'  => ['table' => 'tag', 'references' => 'id']
            ]
    ];

    /**
     * Name of the table
     * @var string
     */
    public static $_table = 'rock';


    /**
     * Status of the table
     * @var bool
     */
    public static $_active = true;

}