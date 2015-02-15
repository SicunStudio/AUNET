<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <p><?php echo ($title); if(is_array($attr)): foreach($attr as $key=>$v): ?><strong style='color:<?php echo ($v["color"]); ?>'>[<?php echo ($v["name"]); ?>]</strong><?php endforeach; endif; ?></p>
    <p><?php echo ($cate); ?></p>
    <p><?php echo ($time); ?></p>
    <P><?php echo ($text); ?></P>
</body>
</html>