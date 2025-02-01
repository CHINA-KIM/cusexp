<?php

//全局变量
global $yearNumber,$config;

use Smarty\Smarty;

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../vendor/smarty/smarty/libs/Smarty.class.php');
require_once(__DIR__ . '/../modules/config.php');

$smarty = new Smarty();
$smarty->clearAllCache();
$smarty->clearCompiledTemplate();

$smarty = new Smarty();

//遍历config中的所有变量再一一对应至模板
foreach ($config as $key => $value)
{
    $smarty->assign($key, $value);
}

//变量传递
$smarty->assign('title','客戶樣本');

// 渲染模板
$smarty->display(__DIR__ . '/../static/templates/about.tpl');








