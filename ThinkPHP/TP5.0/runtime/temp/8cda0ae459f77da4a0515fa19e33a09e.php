<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\wamp64\www\ThinkPHP\TP5.0\public/../application/index\view\index\test27.html";i:1538048296;s:79:"D:\wamp64\www\ThinkPHP\TP5.0\public/../application/index\view\index\header.html";i:1477640643;s:79:"D:\wamp64\www\ThinkPHP\TP5.0\public/../application/index\view\index\footer.html";i:1477640739;}*/ ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>这是第27个例子</title>
<link charset="utf-8" rel="stylesheet" href="__PUBLIC__/common.css">
</head>
<body>
    这里是公共模板头部
<div class="copyright">
    <a title="官方网站" href="http://www.thinkphp.cn">ThinkPHP</a> 
    <span>V5</span> 
    <span>{ 十年磨一剑-为API开发设计的高性能框架 }</span>
</div>
这里是公共模板底部
</body>
</html>
<h2>用户列表（<?php echo $count; ?>）</h2> 
<?php if(is_array($lists) || $lists instanceof \think\Collection): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
<div class="info">
ID：<?php echo $list['id']; ?><br/>
昵称：<?php echo $list['name']; ?><br/>
邮箱：<?php echo $list['sex']; ?><br/>
生日：<?php echo $list['time']; ?><br/>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
<div class="copyright">
    <a title="官方网站" href="http://www.thinkphp.cn">ThinkPHP</a> 
    <span>V5</span> 
    <span>{ 十年磨一剑-为API开发设计的高性能框架 }</span>
</div>
这里是公共模板底部
</body>
</html>