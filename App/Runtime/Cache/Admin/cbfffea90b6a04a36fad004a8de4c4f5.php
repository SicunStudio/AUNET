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
<style type="text/css">
    #wrap{
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
<script type="text/javascript" src="/AUNET/Public/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
    $(function (){
        $('input[level=1]').click(function (){
            var inputs=$(this).parents('.app').find('input');
            $(this).attr('checked')?inputs.attr('checked','checked'):inputs.removeAttr('checked');
        });
        $('input[level=2]').click(function (){
            var inputs=$(this).parents('dl').find('input');
            $(this).attr('checked')?inputs.attr('checked','checked'):inputs.removeAttr('checked');
        });
    });
</script>
<body>
<div>
    <div>
        <form action="<?php echo U('setAccess');;?>" method="post">
            <div id='wrap'>
                <a href="<?php echo U('role');;?>" class="add-app">返回</a>

                <?php if(is_array($node)): foreach($node as $key=>$app): ?><div class='app'>
                        <p>
                            <strong><?php echo ($app["title"]); ?></strong>
                            <input type="checkbox" name="access[]"  level="1" value="<?php echo ($app["id"]); ?>_1"<?php if($app['access']): ?>checked="checked"<?php endif; if(!$app['status']): ?>hidden="hidden"<?php endif; ?>/>
                        </p>
                        <?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
                                <dt>
                                    <strong><?php echo ($action["title"]); ?></strong>
                                    <input type="checkbox" name="access[]" value="<?php echo ($action["id"]); ?>_2" level="2"<?php if($action['access']): ?>checked="checked"<?php endif; if(!$action['status']): ?>hidden="hidden"<?php endif; ?>/>
                                </dt>
                                <?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
                                        <span><?php echo ($method["title"]); ?></span>
                                        <input type="checkbox" name="access[]" value="<?php echo ($method["id"]); ?>_3" level="3"<?php if($method['access']): ?>checked="checked"<?php endif; if(!$method['status']): ?>hidden="hidden"<?php endif; ?>/>
                                    </dd><?php endforeach; endif; ?>
                            </dl><?php endforeach; endif; ?>
                    </div><?php endforeach; endif; ?>
            </div>
            <input type="hidden" name="rid" value="<?php echo ($rid); ?>"/>
            <input type="submit" value="保存修改" style="display: block; margin: 20px auto;cursor:pointer;"/>
        </form>
    </div>

</div>


</body>

</html>

</body>
</html>