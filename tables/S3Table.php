<?php

//namespace Tables;
/**
 * Class UserGroupTable
 */
class S3Table extends ModelClass implements ModelInterface
{

    use ModelTrait;
    /**
     * @var array
     */
    private static $CONFIG = [
                        'pk'        => 'id',
                        'columns'   => ['id', 'name', 'size', 'type', 'url'],
                        'returning' => ['id', 'name', 'size', 'type', 'url'],
                        'int'       => ['id', 'size']
    ];

    /**
     * Name of the table
     * @var string
     */
    private static $_table = 's3';

    protected static $_active = false;

}