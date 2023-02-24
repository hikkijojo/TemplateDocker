<?php

$redis = new Redis();
$redis->connect('redis', 6379);
$redis->set("test", 100, 1000);
echo "Connection to server successfully";
//查看服务是否运行
echo "Server is running: " . $redis->ping();

var_dump($redis->get("test"));

phpinfo();
exit;