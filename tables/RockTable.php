<?php

//namespace Tables;
/**
 * Class RockTable
 */
class RockTable extends ModelClass implements ModelInterface
{

    use ModelTrait;
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
     * You can remove this if you want the name of the table to be automatically resolved from class name.
     * @var string
     */
    private static $_table = 'rock';

    /**
     * This will allow the Model to be registered in the lists of TABLES/Models
     * You can remove this to use the default(true) that is found in the Super class
     * @var bool
     */
    protected static $_active = true;

    /**
     * This will allow the Model to be registered in the list of AUTH_REQUESTS
     * You can remove this to use the default(false) that is found in the Super class
     * Potential Values GET, POST, PATCH and DELETE
     * @var bool
     */
    protected  static $_auth_request = ['GET', 'POST', 'PATCH', 'DELETE'];

    /**
     * This wil allow the Model to be registered in the lists of FORBIDDEN_REQUESTS
     * You can remove this to use the default(empty) that is found in the Super class
     * Potential Values GET, POST, PATCH and DELETE
     * @var array
     */
    protected static $_forbidden_request = ['GET','POST','PATCH','DELETE'];


}