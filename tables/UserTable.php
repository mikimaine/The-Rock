<?php

//namespace Tables;

/**
 * Class UserGroupTable
 */
class UserTable extends ModelClass implements ModelInterface
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

    protected static $_auth_get = true;

}