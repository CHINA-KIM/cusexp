<?php


// 你可以在这里加载任何必要的配置或初始化代码
// 例如数据库连接、会话管理等
// 设置模板引擎
global $yearNumber,$config,$Nav;

use Smarty\Smarty;

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../vendor/smarty/smarty/libs/Smarty.class.php');
require_once(__DIR__ . '/../modules/config.php');
require_once(__DIR__ . '/../modules/Nav.php');

$smarty = new Smarty();
$smarty->clearAllCache();
$smarty->clearCompiledTemplate();


//遍历并传递变量
foreach ($config as $key => $value)
{
    $smarty->assign($key, $value);
}

$smarty->assign('Nav', $Nav);

// 渲染模板
$smarty->display(__DIR__ . '/../static/templates/contact.tpl',);








