<?php
// +----------------------------------------------------------------------
// | ShopSidebar [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 Tangchao All rights reserved.
// +----------------------------------------------------------------------
// | Author: Tangchao <79300975@qq.com>
// +----------------------------------------------------------------------
namespace plugins\shop_sidebar;
use cmf\lib\Plugin;

class ShopSidebarPlugin extends Plugin
{

    public $info = array(
        'name'        => 'ShopSidebar',
        'title'       => '商城侧边工具栏',
        'description' => '商城侧边工具栏',
        'status'      => 1,
        'author'      => 'Tangchao',
        'version'     => '1.0'
    );

    public $hasAdmin = 1;

    public function install()
    {
        return true;
    }

    public function uninstall()
    {
        return true;
    }

    public function footerStart($param)
    {
        $config = $this->getConfig();
        $this->assign("config", $config);
        echo $this->fetch('widget');
    }

}