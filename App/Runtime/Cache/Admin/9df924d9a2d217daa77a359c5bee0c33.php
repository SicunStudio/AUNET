<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<body>

<form  method="post" action="<?php echo U('/Admin/Index/login');?>">

    用户：
    <input type="text" name="username">
    <br />
    密码：
    <input type="password" name="password">
    <br />
    验证码：
    <input type="code" name="code"/><img src="<?php echo U('/Admin/Index/verify');?>" id="code"/>
    <br><br>
    <input type="submit" name="submit" value="提交">
</form>
</body>
</html>