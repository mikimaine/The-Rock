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
    public static $CONFIG = [
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
    public static $_table = 'tag';


    /**
     * Status of the table
     * @var bool
     */
    public static $_active = true;

}