<?php
//变量封装
require("univarpool.php");
global $PORTF1, $PORTF2, $PORTF3, $PORTF4, $PORTF5, $PORTF6;
$config = [
    'home' => "主頁",
    'About' => "關於我們",
    'Service' => "服務",
    'Contact' => "聯係我們",
    'Project' => "成功案例",
    'indexurl' => "/cusexp",
    'Serviceurl' => "/service",
    'Contacturl' => "/contact",      // 直接写相对路径
    'Projecturl' => "/project", // 直接写相对路径
    'Abouturl' => "/about",       // 直接写相对路径
    'helplink'=> "https://www.baidu.com",
    'portfolio1'=>$PORTF1,
    'portfolio2'=>$PORTF2,
    'portfolio3'=>$PORTF3,
    'portfolio4'=>$PORTF4,
    'portfolio5'=>$PORTF5,
    'portfolio6'=>$PORTF6,
];


