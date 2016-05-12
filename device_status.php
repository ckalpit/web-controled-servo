<?php
$temperature = shell_exec('gpio read 5 2>&1');
$voltage = shell_exec('gpio read 6 2>&1');
$current = shell_exec('gpio read 12 2>&1');

//var_dump(array("temp"=>$temperature, "voltage"=>$voltage, "current"=>$current));
//die();

echo json_encode(array("temp"=>$temperature, "voltage"=>$voltage, "current"=>$current));
?>