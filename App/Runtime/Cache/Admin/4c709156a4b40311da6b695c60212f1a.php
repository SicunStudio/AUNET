<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<style type="text/css">
    .add_role{
        display: inline-block;
        width: 100px;
        height: 28px;
        line-height: 26px;
        text-align: center;
        border: 1px solid blue;
        border-radius: 4px;
        margin-left: 20px;
        cursor: pointer;
    }
</style>
<script type="text/javascript" src="/aunet/Public/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
   $(function (){
       $('.add_role').click(function (){
           var obj=$(this).parents('tr').clone();
           obj.find('.add_role').remove();
           $('#last').before(obj);
       })
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
<form action="<?php echo U('addUserHandle');;?>" method="post">
<table class="table">
    <tr>
        <th colspan="2">添加用户</th>
    </tr>
    <tr>
        <td align="right" width="45%">用户账号</td>
        <td>
            <input type="text" name="username"/>
        </td>
    </tr>
    <tr>
        <td align="right">密码</td>
        <td>
            <input type="password" name="password"/>
        </td>
    </tr>
    <tr>
        <td align="right">所属角色</td>
        <td>
            <select name="role_id[]">
                <option value="">请选择角色</option>
                <?php if(is_array($role)): foreach($role as $key=>$v): if($v['status']): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["name"]); ?>(<?php echo ($v["remark"]); ?>)</option><?php endif; endforeach; endif; ?>
            </select>
            <span class="add_role">添加一个角色</span>
        </td>
    </tr>
    <tr id="last">
        <td colspan="2" align="right">
            <input type="submit" name="保存添加"/>
        </td>
    </tr>
</table>
</form>
</body>
</html>