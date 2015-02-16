<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
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
    <form action="<?php echo U('addNodeHandle');;?>" method="post">
    <table class="table">
        <tr>
            <th colspan="2">添加節點</th>
        </tr>
        <tr>
            <td align="right"><?php echo ($type); ?>名稱:</td>
            <td>
                <input type="text" name="name"<?php if(isset($node)): ?>value="<?php echo ($node["name"]); ?>"<?php endif; ?>/>
            </td>
        </tr>
        <tr>
            <td align="right"><?php echo ($type); ?>描述:</td>
            <td>
                <input type="text" name="title"<?php if(isset($node)): ?>value="<?php echo ($node['title']); ?>"<?php endif; ?>/>
            </td>
        </tr>
        <tr>
            <td align="right">是否开启:</td>
            <td>
                <input type="radio" name='status' value='1' checked='checked'/>&nbsp;开启&nbsp;
                <input type="radio" name='status' value='0'/>&nbsp;关闭
            </td>
        </tr>
    <tr>
        <td align="right">排序</td>
        <td>
            <input type="text" name="sort" value="1"<?php if(isset($node)): ?>value="<?php echo ($node['sort']); ?>"<?php endif; ?>/>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="hidden" name="pid" value="<?php echo ($pid); ?>"/>
            <input type="hidden" name="level" value="<?php echo ($level); ?>"/>
            <input type="hidden" name="id" <?php if(isset($node)): ?>value="<?php echo ($node['id']); ?>"<?php endif; ?>/>
            <input type="submit" <?php if(isset($node)): ?>value="保存修改"<?php else: ?>value="添加"<?php endif; ?>/>
        </td>
    </tr>



    </table>
    </form>
</body>
</html>