<?php
/*
 * 此文件用于验证短信服务API接口，供开发时参考
 * 执行验证前请确保文件为utf-8编码，并替换相应参数为您自己的信息，并取消相关调用的注释
 * 建议验证前先执行Test.php验证PHP环境
 *
 * 2017/11/30
 */

namespace Aliyun\DySDKLite\Sms;

require_once "./SignatureHelper.php";

use Aliyun\DySDKLite\SignatureHelper;

/**
 * 生成验证码
 */
function getSmsCode() {
    //随机生成6位验证码
    $chars='0123456789';
    mt_srand((double)microtime()*1000000*getmypid());
    $CheckCode="";
    while(strlen($CheckCode)<6)
        $CheckCode.=substr($chars,(mt_rand()%strlen($chars)),1);
    return $CheckCode;
}

/**
 * 生成流水号
 */
function getOutId() {
    //随机生成流水号
    $year_code = array ('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','I','S','T','U','V','W','X','Y','Z');

    return $year_code[intval (date ('Y'))-2015].
        strtoupper (dechex (date ('m'))).date ('d').
        substr (time (),-5 ).substr (microtime (),2,5 ).sprintf ('%02d',rand (0,99 ));
}

/**
 * 发送短信
 */
function sendSms() {

    $code = getSmsCode();
    $OutId = getOutId();

    $params = array ();

    // *** 需用户填写部分 ***

    // fixme 必填: 请参阅 https://ak-console.aliyun.com/ 取得您的AK信息
    $accessKeyId = "LTAIiS79c6Sltvki";
    $accessKeySecret = "gHLw7nkpSjsixJEZKL2m9vYnqNPv2u";

    // fixme 必填: 短信接收号码
    $phone=$_POST["phone"];
    $params["PhoneNumbers"] =$phone;

    // fixme 必填: 短信签名，应严格按"签名名称"填写，请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/sign
    $params["SignName"] = "忆栈";

    // fixme 必填: 短信模板Code，应严格按"模板CODE"填写, 请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/template
    $params["TemplateCode"] = "SMS_121907056";

    // fixme 可选: 设置模板参数, 假如模板中存在变量需要替换则为必填项
    $params['TemplateParam'] = Array (
        "code" => $code
    );

    // fixme 可选: 设置发送短信流水号
    $params['OutId'] = $OutId;

    // fixme 可选: 上行短信扩展码, 扩展码字段控制在7位或以下，无特殊需求用户请忽略此字段
    $params['SmsUpExtendCode'] = "1234567";


    // *** 需用户填写部分结束, 以下代码若无必要无需更改 ***
    if(!empty($params["TemplateParam"]) && is_array($params["TemplateParam"])) {
        $params["TemplateParam"] = json_encode($params["TemplateParam"], JSON_UNESCAPED_UNICODE);
    }

    // 初始化SignatureHelper实例用于设置参数，签名以及发送请求
    $helper = new SignatureHelper();

    // 此处可能会抛出异常，注意catch
    $content = $helper->request(
        $accessKeyId,
        $accessKeySecret,
        "dysmsapi.aliyuncs.com",
        array_merge($params, array(
            "RegionId" => "cn-hangzhou",
            "Action" => "SendSms",
            "Version" => "2017-05-25",
        ))
    );

    return array('request'=>$content,'code'=>md5($code));
}

ini_set("display_errors", "on"); // 显示错误提示，仅用于测试时排查问题
set_time_limit(0); // 防止脚本超时，仅用于测试使用，生产环境请按实际情况设置
header("Content-Type: text/plain; charset=utf-8"); // 输出为utf-8的文本格式，仅用于测试

// 验证发送短信(SendSms)接口
// print_r(sendSms());
echo json_encode(sendSms(),JSON_UNESCAPED_UNICODE);