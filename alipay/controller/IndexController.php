<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 Tangchao All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <79300975@qq.com>
// +----------------------------------------------------------------------
namespace plugins\alipay\controller;
use cmf\controller\PluginBaseController;
use plugins\alipay\Model\PluginAlipayModel;
use think\Db;
require_once getcwd() .'/plugins/alipay/lib/alipay_submit.class.php';

class IndexController extends PluginBaseController
{
    function index()
    {
        $config = $this->getPlugin('Alipay')->getConfig();
        $alipay_config['partner'] = $config['partner'];
        $alipay_config['seller_email'] = $config['alipayaccount'];
        $alipay_config['alipayname'] = $config['alipayname'];
        $alipay_config['key'] = $config['key'];
        $alipay_config['sign_type'] = strtoupper('MD5');
        $alipay_config['input_charset'] = strtolower('utf-8');
        $alipay_config['cacert'] =  getcwd() . '/plugins/alipay/lib/cacert.pem';
        $alipay_config['transport'] = $config['transport'];

        $parameter = array(
			"out_trade_no" => time(),
			"subject" => "订单名称",
			"total_fee" => "200", 
			"body" => "订单描述",
			"show_url" => "/",
		);

        $parameter['partner'] = trim($alipay_config['partner']);
        $parameter['anti_phishing_key'] = '';
        $parameter['exter_invoke_ip'] = get_client_ip(0, true);
        $parameter['_input_charset'] = trim(strtolower($alipay_config['input_charset']));
        $parameter['notify_url'] = (isset($parameter['notify_url'])) ? $parameter['notify_url'] : ('http://qq.ytecn.com/plugin/alipay/index/index/id/2.html');
        $parameter['return_url'] = (isset($parameter['return_url'])) ? $parameter['return_url'] : ('http://qq.ytecn.com/plugin/alipay/index/index/id/2.html');
        $parameter['service'] = 'create_direct_pay_by_user';
        $parameter['payment_type'] = (isset($parameter['payment_type'])) ? $parameter['payment_type'] : '1';
        $parameter['seller_email'] = trim($alipay_config['seller_email']);
        $alipaySubmit = new \AlipaySubmit($alipay_config);
        $html_text = $alipaySubmit->buildRequestForm($parameter, 'get', '请稍后，等待支付……');
        echo $html_text;
        return $this->fetch("/index");
    }

    //支付成功同步通知接口
    function AlipayPayReturn_Succeed()
    {

    }
    //支付成功或失败异步通知接口
    function AlipayPayNotice_Succeed()
    {

    }
}