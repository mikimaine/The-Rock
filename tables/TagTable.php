<?php

//namespace Tables;

/**
 * Class UserGroupTable
 */
class TagTable extends ModelClass implements ModelInterface
{
    use ModelTrait;

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

    protected static $_active = false;

}