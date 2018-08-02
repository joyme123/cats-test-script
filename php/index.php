<?php

$result = array();

$result['SERVER'] = $_SERVER;
$result['GET'] = $_GET;
$result['POST'] = $_POST;

echo json_encode($result);