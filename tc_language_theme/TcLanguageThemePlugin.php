<?php
// +----------------------------------------------------------------------
// | TcLanguageTheme [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 Tangchao All rights reserved.
// +----------------------------------------------------------------------
// | Author: Tangchao <79300975@qq.com>
// +----------------------------------------------------------------------
namespace plugins\tc_language_theme;
use cmf\lib\Plugin;

class TcLanguageThemePlugin extends Plugin
{
    public $info = [
        'name'        => 'TcLanguageTheme',
        'title'       => '双语言控制',
        'description' => '双语言控制',
        'status'      => 1,
        'author'      => 'Tangchao',
        'version'     => '1.0',
        'demo_url'    => 'http://www.songzhenjiang.cn',
        'author_url'  => 'http://www.songzhenjiang.cn'
    ];

    public $hasAdmin = 0;

    public function install()
    {
        return true;
    }

    public function uninstall()
    {
        return true;
    }

    public function switchTheme($param)
    {
        $config = $this->getConfig();
        $cmfDefaultTheme = config('cmf_default_theme');
        if(!empty(session('language'))){
            if(session('language')!='EN'){
                $cmfDefaultTheme = $config['wapthems'];
            }
        }
        return $cmfDefaultTheme;
    }
}