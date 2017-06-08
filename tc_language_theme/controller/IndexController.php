<?php
// +----------------------------------------------------------------------
// | TcLanguageTheme [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 Tangchao All rights reserved.
// +----------------------------------------------------------------------
// | Author: Tangchao <79300975@qq.com>
// +----------------------------------------------------------------------
namespace plugins\tc_language_theme\controller;
use cmf\controller\PluginBaseController;
use think\Db;

class IndexController extends PluginBaseController
{
    function index($language)
    {
        session('language', $language);
        return $this->fetch("/index");
    }
}