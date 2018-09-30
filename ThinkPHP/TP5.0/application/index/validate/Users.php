<?php
namespace app\index\validate;
use think\Validate;
class Users extends Validate
{
    // 验证规则
    protected $rule = [
        ['name', 'min:2|require', '昵称不能短于5个字符|昵称必须'],
        ['status','in:0,1','状态码为0或1'],
        ['sex'.'in:male,female','性别为male或female'],
        ['time','date','时间格式错误']
        // ['sex', 'sex', '邮箱格式错误'], // 更多 内置规则 http://www.kancloud.cn/manual/thinkphp5/129356
        //['email', 'checkMail:www.tp-shop.cn', '邮箱格式错误'],
        // ['time', 'date', '生日格式错误']
    ];
    
    // 验证邮箱格式 是否符合指定的域名
    protected function checkMail($value, $rule)
    {
        $result = strstr($value,$rule);
        if($result)
            return true;
        else
            return "邮箱必须包含 $rule 域名";
    }    
}