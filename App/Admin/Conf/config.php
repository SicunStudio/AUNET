<?php
return array(
    'RBAC_SUPERADMIN'       =>  'admin',                  //超级管理员名称
    'ADMIN_AUTH_KEY'        =>'superadmin',     //超级管理员识别
    'USER_AUTH_ON'          =>true,
    'USER_AUTH_TYPE'        =>2,     //验证类型(1,下次登录生效 2,实时生效)
    'USER_AUTH_KEY'         =>'uid',  //session用户识别号
    'NOT_AUTH_MODULE'      =>'Index,NewsAttribute,Category',     //无需验证的控制器
    'NOT_AUTH_ACTION'      =>'lock,editpwd,access,setAccess,addUserHandle,addNodeHandle,addNode,delNode,addRoleHandle,index,doc_list,logout,addNewsHandle,upload,remove,toTrash,edit,delete,deleteAll,Text',   //无需验证方法
    'RBAC_ROLE_TABLE'       =>'aunet_role',
    'RBAC_USER_TABLE'       =>'aunet_role_user',
    'RBAC_ACCESS_TABLE'     =>'aunet_access',
    'RBAC_NODE_TABLE'       =>'aunet_node'
	//'配置项'=>'配置值'
);