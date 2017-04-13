<?php

//namespace Tables;
/**
 * Class UserGroupTable
 */
class S3Table
{

    /**
     * @var array
     */
    public static $CONFIG = [
                        'pk'        => 'id',
                        'columns'   => ['id', 'name', 'size', 'type', 'url'],
                        'returning' => ['id', 'name', 'size', 'type', 'url'],
                        'int'       => ['id', 'size']
    ];

    /**
     * Name of the table
     * @var string
     */
    public static $_table = 's3';


    /**
     * Status of the table.
     * This will force the table to be removed from Config::$Config['Table'] static arrays
     * @var bool
     */
    public static $_active = true;

}