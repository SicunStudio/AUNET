<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<style type="text/css">
    #wrap{
        width:94%;
        height: auto;
        overflow: hidden;
        margin: 20px auto;
        padding: 10px 20px;
        border: 1px solid #ccc;
    }
    #wrap .add-app{
        display: block;
        width: 100px;
        height: 28px;
        line-height: 28px;
        text-align: center;
        background: #670768;
        color: #fff;
        border-radius: 4px;
    }
    #wrap .app{
        padding: 10px;
        margin-top: 20px;
        border: 1px solid #f6f6f6;
        border-radius: 4px;
    }
    #wrap .app p{
        height: 30px;
        line-height: 30px;
    }
    #wrap .app p strong{
        font-size: 20px;
        color: #0b99d8;
    }
    #wrap .app dl{
        margin: 10px 0;
        border: 1px solid #dcdcdc;
        height: auto;
        overflow: hidden;
    }
    #wrap .app dl dt{
        display: block;
        height: 36px;
        line-height: 36px;
        background: #e6e6fa;
        text-indent: 10px;
    }
    #wrap .app dl dd{
        padding: 10px;
        float: left;
    }
</style>
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
    <div id='wrap'>
        <a href="<?php echo U('addNode');;?>" class="add-app">添加应用</a>
        <?php if(is_array($node)): foreach($node as $key=>$app): ?><div class='app'>
                <p>
                    <strong><?php echo ($app["title"]); ?></strong>
                    [<a href="<?php echo U('addNode',array('pid'=>$app['id'],'level'=>2));?>">添加控制器</a>]
                </p>
                <?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
                        <dt>
                            <strong><?php echo ($action["title"]); ?></strong>
                            [<a href="<?php echo U('addNode',array('pid'=>$action['id'],'level'=>3));;?>">添加方法</a>]
                        </dt>
                        <?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
                                <span><?php echo ($method["title"]); ?></span>
                                [<a href="<?php echo U('addNode',array('id'=>$method['id'],'level'=>3,'pid'=>$action['id']));?>">修改</a>]
                                [<a href="<?php echo U('delNode',array('id'=>$method['id']));?>">删除</a>]
                            </dd><?php endforeach; endif; ?>
                    </dl><?php endforeach; endif; ?>
            </div><?php endforeach; endif; ?>
    </div>
</body>

</html>