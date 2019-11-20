<?php
function curl_get($api){
    //$api = "https://www.apiopen.top/novelApi";
    //初始化
    $ch = curl_init();
    //链接 1.ch对象 2.curlopt_url连接属性  3.lianjie参数
    curl_setopt($ch,CURLOPT_URL,$api);

    //curl_setopt($ch,CURLOPT_HEADER,0);
    //返回成功或失败  1.显示请求下来的的内容  0.带有布尔值
    curl_setopt($ch,CURLOPT_HEADER,0);

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

    //跳过ssl证书认证
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);

    $out = curl_exec($ch);

    curl_close($ch);

    return $out;

}
//    public function index()
//    {
//        $api = "https://www.apiopen.top/novelApi";
//        $json = curl_get($api);
//        $data = json_decode($json,true);
//        $data = $data['data'];
//        //dump($data);
//        return view("index",['data'=>$data]);
//    }
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
//function curl_post($api,$data){
//    //初始化
//    $ch = curl_init();
//    //url
//    curl_setopt($ch,CURLOPT_URL,$api);
//    //是否返回数据
//    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//    //f发送psot请求
//    curl_setopt($ch,CURLOPT_POST,1);
//    //再发送一些数据
//    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
//    //跳过ssl验证
//    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
//    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
//    //关闭header头信息
//    curl_setopt($ch,CURLOPT_HEADER,0);
//    //执行请求
//    $res =  curl_exec($ch);
//    //释放句柄
//    curl_close($ch);
//    //返回数据
//    return $res;
//}