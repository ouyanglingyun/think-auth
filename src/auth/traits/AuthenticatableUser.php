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

namespace yunwuxin\auth\traits;

trait AuthenticatableUser
{

    public function getAuthId()
    {
        return $this->getAttr($this->getPk());
    }

    public function getAuthPassword()
    {
        return $this->getAttr('password');
    }

    public function getRememberToken()
    {
        return $this->getAttr($this->getRememberTokenName());
    }

    public function setRememberToken($token)
    {
        $this->setAttr($this->getRememberTokenName(), $token);

        $this->save();
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

}
