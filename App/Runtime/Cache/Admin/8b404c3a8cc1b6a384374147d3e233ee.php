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
        var ue = UE.getEditor('ueditor',{onready: function () {
            this.setContent('<?php echo ($text["content"]); ?>');
        }});
    })

</script>
<body>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<style type="text/css">
    div#header{text-align: center;}
    div#menu {float: left;}
</style>
<body>
<div id="header">
    <h1>社团网后台管理系统</h1>
</div>
<div id="menu">
    <dl>
        <dt>社联大事记</dt>
        <dd><a href="#">大事记列表</a></dd>
        <dd><a href="#">添加预告</a></dd>
    </dl>
    <dl>
        <dt>社团地带活动预告</dt>
        <dd><a href="<?php echo U('/Admin/Forecast/forecast_index');?>">预告列表</a></dd>
        <dd><a href="<?php echo U('/Admin/Forecast/forecast_list');?>">添加预告</a></dd>
    </dl>
    <dl>
        <dt>资料上传</dt>
        <dd><a href="<?php echo U('/Admin/Upload/upload_index');?>">上传附件</a></dd>
        <dd><a href="<?php echo U('/Admin/Upload/doc_list');?>">资料列表</a></dd>
    </dl>
    <dl>
        <dt>属性管理</dt>
        <dd><a href="<?php echo U('/Admin/NewsAttribute/attr_index');?>">属性列表</a></dd>
        <dd><a href="<?php echo U('/Admin/NewsAttribute/addAttr');?>">添加属性</a></dd>
    </dl>
    <dl>
        <dt>文章管理</dt>
        <dd><a href="<?php echo U('/Admin/News/news_index');?>">文章列表</a></dd>
        <dd><a href="<?php echo U('/Admin/News/addNews');;?>">添加文章</a></dd>
        <dd><a href="<?php echo U('/Admin/News/trash');;?>">回收站</a></dd>
    </dl>
    <dl>
        <dt>权限管理</dt>
        <dd><a href="<?php echo U('/Admin/Rbac/role');;?>">角色列表</a></dd>
        <dd><a href="<?php echo U('/Admin/Rbac/user');;?>">用户列表</a></dd>
        <dd><a href="<?php echo U('/Admin/Rbac/node');;?>">节点列表</a></dd>
        <dd><a href="<?php echo U('/Admin/Rbac/addRole');;?>">添加角色</a></dd>
        <dd><a href="<?php echo U('/Admin/Rbac/addNode');;?>">添加节点</a></dd>
        <dd><a href="<?php echo U('/Admin/Rbac/addUser');;?>">添加用户</a></dd>
        <dd><a href="<?php echo U('/Admin/Rbac/logout');;?>">退出登录</a></dd>
    </dl>
    <dl>
        <dt>分类管理</dt>
        <dd><a href="<?php echo U('/Admin/Category/addCate');;?>">添加分类</a></dd>
        <dd><a href="<?php echo U('/Admin/Category/cate_index');;?>">分类列表</a></dd>
    </dl>
</div>



</body>
</html>
    <form action="<?php echo U('addNewsHandle');?>" method="post">
        <table class="table">
            <tr>
                <th colspan="2">博文修改</th>
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
                    <input type="text" name="title" value="<?php echo ($text["title"]); ?>"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea name="content" id="ueditor"></textarea>
                </td>
            </tr>
            <input type="hidden" name="id" value="<?php echo ($text["id"]); ?>"/>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="保存提交"/>
                </td>
            </tr>

        </table>
    </form>


</body>
</html>