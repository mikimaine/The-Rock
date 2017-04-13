<?php

//namespace Tables;

/**
 * Class UserGroupTable
 */
class UserTable implements ModelInterface
{

    use ModelTrait;

    /**
     * @var array
     */
    private static $CONFIG = [
                        'pk'        => 'user_id',
                        'columns'   => ['user_id', 'user_full_name', 'user_username', 'user_password', 'user_status', 'user_group'],
                        'returning' => ['user_id', 'user_full_name', 'user_username', 'user_status', 'user_group'],
                        'int'       => ['user_id', 'user_group'],
                        'bool'      => ['user_status'],
                        'search'    => ['user_full_name', 'user_username'],
                        'fk'        => [
                            'user_group' => ['table' => 'user_group', 'references' => 'user_group_id']
                        ]
    ];

    /**
     * Name of the table
     * @var string
     */
    private static $_table = 'user';


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

}