<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
        <dt>建议管理</dt>
        <dd><a href="<?php echo U('/Admin/Advise/advise_index');?>">建议列表</a></dd>
    </dl>
    <dl>
        <dt>社联大事记</dt>
        <dd><a href="#">大事记列表</a></dd>
        <dd><a href="#">添加预告</a></dd>
    </dl>
    <dl>
        <dt>社团地带活动预告</dt>
        <dd><a href="<?php echo U('/Admin/Forecast/forecast_index');?>">预告列表</a></dd>
        <dd><a href="<?php echo U('/Admin/Forecast/addforecast');?>">添加预告</a></dd>
    </dl>
    <dl>
        <dt>资料上传</dt>
        <dd><a href="<?php echo U('/Admin/Upload/upload_index');?>">上传附件</a></dd>
        <dd><a href="<?php echo U('/Admin/Upload/doc_list');?>">资料列表</a></dd>
    </dl>
    <dl>
        <dt>属性管理</dt>
        <dd><a href="<?php echo U('/Admin/Newsattribute/attr_index');?>">属性列表</a></dd>
        <dd><a href="<?php echo U('/Admin/Newsattribute/addattr');?>">添加属性</a></dd>
    </dl>
    <dl>
        <dt>文章管理</dt>
        <dd><a href="<?php echo U('/Admin/News/news_index');?>">文章列表</a></dd>
        <dd><a href="<?php echo U('/Admin/News/addnews');;?>">添加文章</a></dd>
        <dd><a href="<?php echo U('/Admin/News/trash');;?>">回收站</a></dd>
    </dl>
    <dl>
        <dt>权限管理</dt>
        <dd><a href="<?php echo U('/Admin/Rbac/role');;?>">角色列表</a></dd>
        <dd><a href="<?php echo U('/Admin/Rbac/user');;?>">用户列表</a></dd>
        <dd><a href="<?php echo U('/Admin/Rbac/node');;?>">节点列表</a></dd>

    </dl>
    <dl>
        <dt>分类管理</dt>
        <dd><a href="<?php echo U('/Admin/Category/addcate');;?>">添加分类</a></dd>
        <dd><a href="<?php echo U('/Admin/Category/cate_index');;?>">分类列表</a></dd>
    </dl>
    <dl>
        <dt>账户管理</dt>
        <dd><a href="<?php echo U('/Admin/Rbac/help');;?>">用户帮助</a></dd>
        <dd><a href="<?php echo U('/Admin/Rbac/editpwdbyuser');?>">修改密码</a></dd>
        <dd><a href="<?php echo U('/Admin/Rbac/logout');;?>">退出登录</a></dd>
    </dl>
    <dl>
        <dt>物资系统管理</dt>
        <dd><a href="<?php echo U('/Admin/Material/material_index');;?>">物资系统管理</a></dd>
    </dl>

</div>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>用户名称</th>
                <th>上一次登陆时间</th>
                <th>上一次登陆IP</th>
                <th>锁定状态</th>
                <th>用户所属组别</th>
                <th>操作</th>
            </tr>
            <?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
                    <td><?php echo ($v["id"]); ?></td>
                    <td><?php echo ($v["username"]); ?></td>
                    <td><?php echo (date('y-m-d H:i', $v["logintime"])); ?></td>
                    <td><?php echo ($v["loginip"]); ?></td>
                    <td>
                        <?php if($v['lock']): ?>锁定<?php else: ?>未锁定<?php endif; ?>
                    </td>
                    <td>
                        <?php if($v['username']==C('RBAC_SUPERADMIN')): ?>超级管理员
                            <?php else: ?>
                            <ul>
                                <?php if(is_array($v["role"])): foreach($v["role"] as $key=>$value): ?><li><?php echo ($value["name"]); ?>(<?php echo ($value["remark"]); ?>)</li><?php endforeach; endif; ?>
                            </ul><?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo U('editpwd',array('id'=>$v['id']));?>">修改密码</a>
                    </td>
                    <td>
                        <a href="<?php echo U('lock',array('id'=>$v['id'],'lock'=>$v['lock']));?>"><?php if($v['lock']): ?>解锁<?php else: ?>锁定<?php endif; ?></a>
                    </td>
                </tr><?php endforeach; endif; ?>
            <td colspan="10" align="center">
                <a href="<?php echo U('addUser');?>">添加用户</a>
            </td>
        </table>
    </div>




</body>
</html>
</body>
</html>