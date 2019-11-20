<?php
/**
 * Created by PhpStorm.
 * User: yae
 * Date: 2019/8/23
 * Time: 9:56
 * 支付宝接口
 */
namespace app\index\controller;
use think\Controller;
class Alipay extends Controller
{
    function index(){
        $code = $this->tion();
        return view('alipay/index',['code'=>$code]);
    }
    function tion(){
        $array = range(0,9);
        shuffle($array);
        $num = implode($array);
        $time = date('YmdHis',time());
        //dump($time);
        $code = $time.$num;
        return $code;
    }
    function up(){
        $param = input('param.');
        $config = config('Alipay');
        //halt($config);
        import('AlipayTradeService',EXTEND_PATH.DS.'Alipay'.DS.'pagepay'.DS.'service');
        import('AlipayTradePagePayContentBuilder',EXTEND_PATH.DS.'Alipay'.DS.'pagepay'.DS.'buildermodel');
        $payRequestBuilder = new \AlipayTradePagePayContentBuilder();
        //详细描述
        $payRequestBuilder->setBody($param['say']);
        //简略描述
        $payRequestBuilder->setSubject($param['order_name']);
        //金额
        $payRequestBuilder->setTotalAmount($param['rmb']);
        //订单号
        $payRequestBuilder->setOutTradeNo($param['num_card']);
        //传入配置文件
        $aop = new \AlipayTradeService($config);
        //拉起付款码页面
        $res = $aop->pagePay($payRequestBuilder,$config['return_url'],$config['notify_url']);
        
    }
    function notify_url(){
        echo "这是回调";
    }
    function return_url(){
        echo "这是回调";
    }
    function return(){
        echo "这是回调";
    }
}