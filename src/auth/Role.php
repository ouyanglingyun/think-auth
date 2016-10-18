<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------
namespace think\auth;

abstract class Role
{
    /** @var array 权限列表 */
    protected $permissions = [];

    /** @var string 角色标识 */
    protected $name;

    public function __construct($name, $permissions = [])
    {
        $this->name        = $name;
        $this->permissions = $permissions;
    }

    /**
     * 设置角色权限
     * @param $permissions
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * 获取权限列表
     * @return array
     */
    public function getPermissions()
    {
        return $this->permissions;
    }
}