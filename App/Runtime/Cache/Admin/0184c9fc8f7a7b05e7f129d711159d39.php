<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<script type="text/javascript" src="/AUNET/Public/js/jquery-2.0.2.js"></script>
<script type="text/javascript" src="/AUNET/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/AUNET/Public/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="lang/zh-cn/zh-cn.js"></script>
<script>
    $(function(){
        window.UEDITOR_CONFIG.initialFrameHeight=600;
        window.UEDITOR_CONFIG.initialFrameWidth=1900;
        var ue = UE.getEditor('content')
    })
</script>
<body>

<form action="<?php echo U('addNewsHandle');?>" method="post">
    <table class="table">
        <tr>
            <th colspan="2">博文发布</th>
        </tr>
        <tr>
            <td align="right" width="10%">所属分类</td>
            <td>
                <select name="cid">
                    <option value="">===请选择分类===</option>
                    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">博文属性</td>
            <td>
                <?php if(is_array($attr)): foreach($attr as $key=>$v): ?><label style="margin-right:10px;">
                        <input type="checkbox" name="aid[]" value="<?php echo ($v["id"]); ?>"/>&nbsp<?php echo ($v["name"]); ?>
                    </label><?php endforeach; endif; ?>
            </td>
        </tr>
        <tr>
            <td align="right">标题</td>
            <td>
                <input type="text" name="title"/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <textarea name="content" id="content"></textarea>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <input type="submit" value="保存提交"/>
            </td>
        </tr>
    </table>
</form>


</body>
</html>