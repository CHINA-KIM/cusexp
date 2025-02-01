<?php
// 设置模板引擎
global $yearNumber, $config;

use Smarty\Smarty;

    require_once ('vendor/autoload.php');
    require_once('vendor/smarty/smarty/libs/Smarty.class.php');
    require_once('modules/times.php'); //获取年份序号
    require_once('modules/config.php');
    $smarty = new Smarty();

    //遍历config中的所有变量再一一对应至模板
    foreach ($config as $key => $value)    {
    $smarty->assign($key, $value);
    }
    $smarty->assign('recenttimes', $yearNumber);
    $smarty->assign('title', '客戶樣本');
    // 渲染模板
    $smarty->display('static\templates\index.tpl');

    ?>







