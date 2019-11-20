<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
//        $api = "http://api.wangshuwen.com/getHotMovie";
//        $json = curl_get($api);
//        $data = json_decode($json,true);
//        $data = $data['data'];
//        dump($data);
//        return view("index",['data'=>$data]);
        return view();
    }
    /**
     * $cont发送内容
     * $gotime有效时间
     * $phone被发送手机号
     */
    //首页返回发送内容执行发送请求
    function sendsms(){
        $cont = input('param.cont');
        $gotime = input('param.gotime');
        $phone = input('param.phone');
        import("CCPRestSDK",EXTEND_PATH.DS.'Rest'.DS);
        $rest = new \Rest(config("SMS.serverIP"),config("SMS.serverPort"),config("SMS.softVersion"));
        $rest->setAccount(config('SMS.accountSid'),config('SMS.accountToken'));
        $rest->setAppId(config('SMS.appId'));
        echo "发送中……<br/>";
        $result = $rest->sendTemplateSMS("$phone",["$cont","$gotime"],1);
        if($result == NULL ) {
            echo "发送失败!";
            exit;
        }
        if($result->statusCode!=0) {
            echo "错误码 :" . $result->statusCode . "<br>";
            echo "错误信息 :" . $result->statusMsg . "<br>";
            //TODO 添加错误处理逻辑
        }else{
            echo "发送成功!<br/>";
            // 获取返回信息
            $smsmessage = $result->TemplateSMS;
            echo "dateCreated:".$smsmessage->dateCreated."<br/>";
            echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
            //TODO 添加成功处理逻辑
        }
    }
}
