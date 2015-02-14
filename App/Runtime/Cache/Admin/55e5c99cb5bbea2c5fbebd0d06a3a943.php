<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<body>
<form action="<?php echo U('upload');?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple/>
    <input type="submit" value="提交"/>
</form>
</body>
</html>