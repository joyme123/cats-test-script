<?php

$result = array();

$result['SERVER'] = $_SERVER;
$result['GET'] = $_GET;
$result['POST'] = $_POST;

foreach($_FILES as $key => $file) {
    if ($file['tmp_name'] == "") {
        continue;
    }
    if (!move_uploaded_file($file['tmp_name'], "./".$file['name'])) {
        echo "文件移动失败";
    }

    $_FILES[$key]['filepath'] = $file['name'];
}

$result['FILE'] = $_FILES;

echo json_encode($result);
