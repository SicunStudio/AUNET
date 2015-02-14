<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="<?php echo U('editpwdHandle');?>" method="post">
        <input type="password" name="password"/>
        <input type="hidden" name="id" value="<?php echo ($id); ?>"/>
        <input type="submit" value="确认修改"/>
    </form>
</body>
</html>