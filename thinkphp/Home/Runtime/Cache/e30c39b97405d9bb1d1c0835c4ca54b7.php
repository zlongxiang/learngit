<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User-index</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/CSS/basic.css" >
    <script>
        function jump(){
            window.location="/thinkphp/index.php/User/add";
        }
    </script>
</head>
<body>
<form action="/thinkphp/index.php/User/search" method="post">
    姓名：<input type="text" name="username" >
    性别：男<input type="radio" name="sex" value="1">女<input type="radio" name="sex" value="0">
    <input type="submit" value="search">
</form>
<table border="1px" width="200" align="center">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>sex</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["username"]); ?></td>
            <td><?php echo ($vo["sex"]); ?></td>
            <td><a href="/thinkphp/index.php/User/modify/id/<?php echo ($vo["id"]); ?>">修改</a> |
                <a href="/thinkphp/index.php/User/delete/id/<?php echo ($vo["id"]); ?>">删除</a>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<center><button onclick="jump()">增加用户</button></center>
<p>hello <?php echo ($name); ?></p>
</body>
</html>