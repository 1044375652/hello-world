<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\wamp64\www\ThinkPHP\TP5.0\public/../application/index\view\index\test25.html";i:1538047255;}*/ ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>查看用户列表</title>
<style>
body{
    color: #333;
    font: 16px Verdana, "Helvetica Neue", helvetica, Arial, 'Microsoft YaHei', sans-serif;
    margin: 0px;
    padding: 20px;
}

a{
    color: #868686;
    cursor: pointer;
}
a:hover{
    text-decoration: underline;
}
h2{
    color: #4288ce;
    font-weight: 400;
    padding: 6px 0;
    margin: 6px 0 0;
    font-size: 28px;
    border-bottom: 1px solid #eee;
}
div{
margin:8px;
}
.info{
    padding: 12px 0;
    border-bottom: 1px solid #eee;
}

.copyright{
    margin-top: 24px;
    padding: 12px 0;
  border-top: 1px solid #eee;
}
</style>
</head>
<body>
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
</body>
</html>