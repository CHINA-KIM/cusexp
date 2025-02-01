<?php
// 引入 Composer 自动加载器（注意路径调整）

require_once(__DIR__ . '/../vendor/autoload.php');

use Smarty\Smarty;

// 使用 Smarty 类
$smarty = new Smarty();

// 传递变量
$smarty->assign('title', '管理后台');

// 渲染模板
$smarty->display('static/acs.tpl');
