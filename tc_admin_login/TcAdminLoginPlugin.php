<?php
// +----------------------------------------------------------------------
// | TcAdminLogin [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 Tangchao All rights reserved.
// +----------------------------------------------------------------------
// | Author: Tangchao <79300975@qq.com>
// +----------------------------------------------------------------------
namespace plugins\tc_admin_login;

use cmf\lib\Plugin;
use think\Db;

class TcAdminLoginPlugin extends Plugin
{

    public $info = [
        'name'        => 'TcAdminLogin',
        'title'       => '自定义后台登录页',
        'description' => '自定义后台登录页',
        'status'      => 1,
        'author'      => 'Tangchao',
        'version'     => '1.0'
    ];

    public $hasAdmin = 0;//插件是否有后台管理界面

    // 插件安装
    public function install()
    {
        return true;
    }

    // 插件卸载
    public function uninstall()
    {
        return true;
    }

    public function adminLogin()
    {
        $config = $this->getConfig();
        $this->assign("config", $config);
        return $this->fetch('widget');
    }
}