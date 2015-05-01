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
        <dd><a href="<?php echo U('/Admin/Event/event_index');?>">大事记列表</a></dd>
        <dd><a href="#">添加预告</a></dd>
    </dl>
    <dl>
        <dt>发布公告</dt>
        <dd><a href="<?php echo U('/Admin/Announce/add_announce');?>">添加公告</a></dd>
        <dd><a href="<?php echo U('/Admin/Announce/announce_index');?>">公告列表</a></dd>
    </dl>
    <dl>
        <dt>活动预告</dt>
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
    <title>大事记列表</title>
</head>
<body>
<table class="table">
    <caption align="top">大事记列表</caption>
    <tr>
        <th>内容</th>
        <th>年</th>
        <th>月</th>
        <th>日</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
            <td width="8%"><?php echo ($v["content"]); ?></td>
            <td width="18%" align="center"><?php echo ($v['year']); ?></td>
            <td width="18%" align="center"><?php echo ($v['month']); ?></td>
            <td width="18%" align="center"><?php echo ($v['day']); ?></td>
            <td width="18%" align="center">

                <a href="<?php echo U('/Admin/Announce/DelAnnounce',array('id'=>$v['id']));?>">删除</a>
            </td>
        </tr><?php endforeach; endif; ?>

</table>
</body>
</html>
</body>
</html>