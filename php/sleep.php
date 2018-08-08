<?php
$time = $_GET['time'];

sleep($time);

echo "sleep了".$time."秒";