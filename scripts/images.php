<?php
$dir    = '../files/images/'.$_GET['id'].'/';
$files1 = scandir($dir);

unset($files1[0]);
unset($files1[1]);

$files1 = array_values($files1);

echo json_encode($files1);
?>