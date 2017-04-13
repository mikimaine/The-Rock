<?php

//namespace Tables;

/**
 * Class UserGroupTable
 */
class UserGroupTable
{

    /**
     * @var array
     */
    public static $CONFIG = [
                'pk'        => 'user_group_id',
                'columns'   => [
                    'user_group_id',
                    'user_group_name',
                    'user_group_has_permission_create_rock', 'user_group_has_permission_read_rock', 'user_group_has_permission_update_rock', 'user_group_has_permission_delete_rock',
                    'user_group_has_permission_create_tag', 'user_group_has_permission_read_tag', 'user_group_has_permission_update_tag', 'user_group_has_permission_delete_tag',
                    'user_group_has_permission_create_s3', 'user_group_has_permission_read_s3', 'user_group_has_permission_update_s3', 'user_group_has_permission_delete_s3',
                    'user_group_has_permission_create_user', 'user_group_has_permission_read_user', 'user_group_has_permission_update_user', 'user_group_has_permission_delete_user',
                    'user_group_has_permission_create_user_group', 'user_group_has_permission_read_user_group', 'user_group_has_permission_update_user_group', 'user_group_has_permission_delete_user_group',
                    'user_group_status'
                ],
                'returning' => [
                    'user_group_id',
                    'user_group_name',
                    'user_group_has_permission_create_rock', 'user_group_has_permission_read_rock', 'user_group_has_permission_update_rock', 'user_group_has_permission_delete_rock',
                    'user_group_has_permission_create_tag', 'user_group_has_permission_read_tag', 'user_group_has_permission_update_tag', 'user_group_has_permission_delete_tag',
                    'user_group_has_permission_create_s3', 'user_group_has_permission_read_s3', 'user_group_has_permission_update_s3', 'user_group_has_permission_delete_s3',
                    'user_group_has_permission_create_user', 'user_group_has_permission_read_user', 'user_group_has_permission_update_user', 'user_group_has_permission_delete_user',
                    'user_group_has_permission_create_user_group', 'user_group_has_permission_read_user_group', 'user_group_has_permission_update_user_group', 'user_group_has_permission_delete_user_group',
                    'user_group_status'
                ],
                'int'       => ['user_group_id'],
                'bool'      => [
                    'user_group_has_permission_create_rock', 'user_group_has_permission_read_rock', 'user_group_has_permission_update_rock', 'user_group_has_permission_delete_rock',
                    'user_group_has_permission_create_tag', 'user_group_has_permission_read_tag', 'user_group_has_permission_update_tag', 'user_group_has_permission_delete_tag',
                    'user_group_has_permission_create_s3', 'user_group_has_permission_read_s3', 'user_group_has_permission_update_s3', 'user_group_has_permission_delete_s3',
                    'user_group_has_permission_create_user', 'user_group_has_permission_read_user', 'user_group_has_permission_update_user', 'user_group_has_permission_delete_user',
                    'user_group_has_permission_create_user_group', 'user_group_has_permission_read_user_group', 'user_group_has_permission_update_user_group', 'user_group_has_permission_delete_user_group',
                    'user_group_status'],
                'search'    => ['user_group_name'],
                'fk'        => [
                    '{user}'  => ['table' => 'user', 'referenced_by' => 'user_group_id', 'referencing_column' => 'user_group']
                ]
    ];

    /**
     * Name of the table
     * @var string
     */
    public static $_table = 'user_group';


    /**
     * Status of the table
     * @var bool
     */
    public static $_active = true;

}