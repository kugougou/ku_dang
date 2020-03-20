<?php
header('content-type:text/html;charset=utf-8');
define('HOST', 'localhost');
define('ROOT', 'root');
define('POSS', '');
define('DBNAME', 'peixun');

$coon = @new mysqli(HOST, ROOT, POSS, DBNAME);
if ($coon->connect_errno) {
    die('数据库连接错误，请检查' . $coon->connect_errno);
};
mysqli_set_charset($coon, 'utf8');
$res =  $coon->query("select * from xiangqing");
$arr = array();
for ($i = 0; $i < ($res->num_rows); $i++) {
    $arr[$i] = $res->fetch_assoc();
};
echo json_encode($arr);
