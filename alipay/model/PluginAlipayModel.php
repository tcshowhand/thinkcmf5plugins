<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 Tangchao All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <79300975@qq.com>
// +----------------------------------------------------------------------
namespace plugins\qqlogin\model;//qqlogin插件英文名，改成你的插件英文就行了
use think\Model;

//qqlogin插件英文名，改成你的插件英文就行了,插件数据表最好加个plugin前缀再加表名,这个类就是对应“表前缀+plugin_qqlogin”表
class PluginQqloginModel extends Model
{
    //自定义方法
    function test()
    {
        echo "hello";
    }
}