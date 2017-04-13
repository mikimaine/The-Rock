<?php

//namespace Tables;
/**
 * Class UserGroupTable
 */
class S3Table implements ModelInterface
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


    /**
     * Status of the table.
     * This will force the table to be removed from Config::$Config['Table'] static arrays
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

}