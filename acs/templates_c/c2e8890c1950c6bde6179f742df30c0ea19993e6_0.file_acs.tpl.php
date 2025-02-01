<?php
/* Smarty version 5.4.3, created on 2025-02-01 07:43:14
  from 'file:static/acs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_679dd0926c2b03_49239741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2e8890c1950c6bde6179f742df30c0ea19993e6' => 
    array (
      0 => 'static/acs.tpl',
      1 => 1738395793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_679dd0926c2b03_49239741 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\cusexp\\acs\\static';
?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>服务管理后台</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">服务管理后台</h1>

    <!-- 导航栏 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">后台管理</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#customerMessages">客户信息</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#websiteContent">网站内容与图片</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- 客户信息模块 -->
    <div id="customerMessages" class="mt-4">
        <h2>客户发来的信息</h2>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>客户姓名</th>
                <th>信息内容</th>
                <th>提交时间</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('customerMessages'), 'message');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('message')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('message')['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('message')['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('message')['content'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('message')['submit_time'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>

    <!-- 网站内容与图片更新模块 -->
    <div id="websiteContent" class="mt-4">
        <h2>更换网站内容与图片</h2>
        <form method="POST" action="update_content.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="pageTitle">页面标题</label>
                <input type="text" class="form-control" id="pageTitle" name="pageTitle" value="<?php echo $_smarty_tpl->getValue('pageTitle');?>
" required>
            </div>
            <div class="form-group">
                <label for="pageDescription">页面描述</label>
                <textarea class="form-control" id="pageDescription" name="pageDescription" rows="5" required><?php echo $_smarty_tpl->getValue('pageDescription');?>
</textarea>
            </div>
            <div class="form-group">
                <label for="seoKeywords">SEO关键词</label>
                <input type="text" class="form-control" id="seoKeywords" name="seoKeywords" value="<?php echo $_smarty_tpl->getValue('seoKeywords');?>
">
            </div>
            <div class="form-group">
                <label for="pageContent">页面内容</label>
                <textarea class="form-control" id="pageContent" name="pageContent" rows="5" required><?php echo $_smarty_tpl->getValue('pageContent');?>
</textarea>
            </div>

            <!-- 图片上传模块 -->
            <h3>上传图片 (最多 6 张)</h3>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('imageIndices'), 'imageIndex');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('imageIndex')->value) {
$foreach1DoElse = false;
?>
                <div class="form-group">
                    <label for="pageImage<?php echo $_smarty_tpl->getValue('imageIndex');?>
">上传图片 <?php echo $_smarty_tpl->getValue('imageIndex');?>
</label>
                    <input type="file" class="form-control-file" id="pageImage<?php echo $_smarty_tpl->getValue('imageIndex');?>
" name="pageImage[]">

                    <!-- 显示当前图片路径（如果有的话）-->
                    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('currentImages')[$_smarty_tpl->getValue('imageIndex')-1] ?? null)))) {?>
                        <div class="mt-2">
                            <label>当前图片：</label>
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('currentImages')[$_smarty_tpl->getValue('imageIndex')-1];?>
" readonly>
                        </div>
                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

            <button type="submit" class="btn btn-primary">更新内容</button>
        </form>
    </div>
</div>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
