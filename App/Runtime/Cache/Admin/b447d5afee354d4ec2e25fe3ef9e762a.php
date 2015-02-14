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
    <table class="table">
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>所属分类</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>
        <?php if(is_array($news)): foreach($news as $key=>$v): ?><tr>
                <td width="8%"><?php echo ($v["id"]); ?></td>
                <td><a href="<?php echo U('Text',array('id'=>$v['id']));?>" ><?php echo ($v["title"]); ?></a><?php if(is_array($v["attr"])): foreach($v["attr"] as $key=>$value): ?><strong style='color:<?php echo ($value["color"]); ?>'>[<?php echo ($value["name"]); ?>]</strong><?php endforeach; endif; ?></td>
                <td width="12%"><?php echo ($v["cate"]); ?></td>
                <td width="12%"><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
                <td width="18%" align="center">
                    <?php if(ACTION_NAME == 'index'): ?>[<a href="<?php echo U('edit',array('id'=>$v['id']));?>">修改</a>]
                        [<a href="<?php echo U('toTrash',array('id'=>$v['id'],'type'=>1));?>">删除</a>]
                        <?php else: ?>
                        [<a href="<?php echo U('toTrash',array('id'=>$v['id'],'type'=>0));?>">还原</a>]
                        [<a href="<?php echo U('delete',array('id'=>$v['id']));?>">彻底删除</a>]<?php endif; ?>

                </td>
            </tr><?php endforeach; endif; ?>

    </table>
    <?php if(ACTION_NAME == 'trash'): ?><td colspan="5" align="center">
            [<a href="<?php echo U('deleteAll');?>">清空回收站</a>]
        </td><?php endif; ?>
</body>
</html>