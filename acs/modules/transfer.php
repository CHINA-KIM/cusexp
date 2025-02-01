<?php

use Smarty\Smarty;

require_once(__DIR__ . '/../vendor/autoload.php');

$image_paths = [];
for ($i = 1; $i <= 6; $i++) {
    $var_name = "PORTF{$i}_TRA"; // 变量名
    if (isset($_FILES["new_image_$i"]) && $_FILES["new_image_$i"]["error"] === UPLOAD_ERR_OK) {
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["new_image_$i"]["name"]);
        if (move_uploaded_file($_FILES["new_image_$i"]["tmp_name"], $target_file)) {
            $$var_name = $target_file; // 创建动态变量
            $image_paths[$var_name] = $target_file;
        }
    }
}

123456




