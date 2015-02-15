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
<body>
<dl>
    <dt>资料上传</dt>
    <dd><a href="<?php echo U('/Admin/Upload/index');?>">上传附件</a></dd>
    <dd><a href="<?php echo U('/Admin/Upload/doc_list');?>">资料列表</a></dd>
</dl>
<dl>
    <dt>属性管理</dt>
    <dd><a href="<?php echo U('/Admin/NewsAttribute/index');?>">属性列表</a></dd>
    <dd><a href="<?php echo U('/Admin/NewsAttribute/addAttr');?>">添加属性</a></dd>
</dl>
<dl>
    <dt>文章管理</dt>
    <dd><a href="<?php echo U('/Admin/News/index');?>">文章列表</a></dd>
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
    <dd><a href="<?php echo U('/Admin/Category/index');;?>">分类列表</a></dd>
</dl>


</body>
</html>
    <table class="table"/>
        <tr>
            <th>ID</th>
            <th>角色名稱</th>
            <th>角色描述</th>
            <?php if(is_array($role)): foreach($role as $key=>$v): ?><tr>
                    <td><?php echo ($v["id"]); ?></td>
                    <td><?php echo ($v["name"]); ?></td>
                    <td><?php echo ($v["remark"]); ?></td>
                    <td>
                        <a href="<?php echo U('access',array('rid'=>$v['id']));;?>">配置權限</a>
                    </td>

                </tr><?php endforeach; endif; ?>
        </tr>


    </table>
</body>
</html>