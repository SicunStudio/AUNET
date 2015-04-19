#AUNET
#基于ThinkPHP框架的社团网快速开发
#完成SAE平台移植


#前台注意:
#   你的文件请将除html以外的文件用 "/Public/模块名+Src" 路径命名的文件夹保存，如新闻模块的css，jpg文件放在/Public/NewsSrc文件夹下
#   html文件放入/App/Home/View中

##社团网入口http://serverName/AUNET/

##社团网前台(首页)入口文件夹/App/Home
##社团网后台(管理系统)入口文件夹/App/Admin
##社团网前台(物资管理系统)入口文件夹/App/Material
##社团网前台(评分系统)入口文件夹/App/Grade
##社团网前台(设计委任系统)入口文件夹/App/Design
##社团网前后台共用文件(即资源文件或相关框架)/Public

##上传文件路径/Upload

##其余均为框架文件

##html及css文件放在对应入口路径/View下 例:/App/Home/View/(参照Admin/View中结构）

##aunet.sql  本地mysql文件
##app_authinkphp.sql SAE平台mysql文件

##已完成:
###1.权限管理(包括用户管理)
###2.新闻动态全部功能
###3.资料管理全部功能
###4.社团地带---活动预告全部功能
###5.伪静态
###6.建议管理后台部分


##待完成:
###1.FAQ管理
###2.社联大事记
###3.其他部分的文字录入
