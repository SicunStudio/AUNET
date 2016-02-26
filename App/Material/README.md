# 社团网 物资系统 #
## Updated 2016-02-19

## 权限设置
格式：名称（**描述**）

应用：Material（**物资系统**）

 - 控制器1：Material（**物资系统前端**）

   - 方法：提交申请所需
   - apply（**申请-主页面**）
   - apply_procedure（**申请-申请流程介绍**）
   - material_upload（**申请-申请提交**）
   - apply_state（**申请-审批状态**）
   - 方法：审批所需
   - admin（**审批-审批主页面**）
   - admin_table（**审批-列表**）
   - material_adupload（**审批-提交审批信息**）
 - 控制器2：Load（**表格预览和下载**）
   - preview（**表格预览**）
   - downloadword（**表格下载**）

应用：后台

 - 控制器：Material（**物资系统**）
   - 方法：提交申请、审批申请需要
   - material_index（**物资系统入口**）
