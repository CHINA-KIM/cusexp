<?php


// 你可以在这里加载任何必要的配置或初始化代码
// 例如数据库连接、会话管理等
// 设置模板引擎
global $yearNumber;

use Smarty\Smarty;

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../vendor/smarty/smarty/libs/Smarty.class.php');


$smarty = new Smarty();
$smarty->clearAllCache();
$smarty->clearCompiledTemplate();


//变量传递
$smarty->assign('title','客戶樣本');
$smarty->assign('home', '主頁');
$smarty->assign('About','關於');
$smarty->assign('Contact','聯繫我們');
$smarty->assign('Service','服務');
// 渲染模板
$smarty->display(__DIR__ . '/../static/templates/about.tpl');








