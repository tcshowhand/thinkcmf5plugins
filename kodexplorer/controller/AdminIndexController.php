<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <79300975@qq.com>
// +----------------------------------------------------------------------
namespace plugins\kodexplorer\controller; //qqlogin插件英文名，改成你的插件英文就行了
use think\Db;
use cmf\controller\PluginBaseController;

require_once 'plugins/kodexplorer/KODExplorer/config/config.php';

class AdminIndexController extends PluginBaseController
{

    function _initialize()
    {
        $adminId = cmf_get_current_admin_id();//获取后台管理员id，可判断是否登录
        if (!empty($adminId)) {
            $this->assign("admin_id", $adminId);
        } else {
            print_r("骚年你在做什么");
            die();
            //TODO no login
        }
    }

    function index()
    {
        $GLOBALS['app'] = new \Application();
        init_lang();
        init_setting();
        $GLOBALS['app']->run();
    }

}
