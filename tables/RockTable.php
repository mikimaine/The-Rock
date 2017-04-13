<?php

//namespace Tables;
/**
 * Class RockTable
 */
class RockTable extends ModelClass  implements ModelInterface
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
     * You can remove this if you want
     * Name of the table will be automatically resolved from class name.
     * @var string
     */
    private static $_table = 'rock';

    /**
     * @var bool
     */
    protected static $_auth_get = true;


}