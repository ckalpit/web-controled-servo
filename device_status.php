<?php
$temperature = trim(shell_exec('gpio read 21 2>&1'));
$voltage = trim(shell_exec('gpio read 22 2>&1'));
$current = trim(shell_exec('gpio read 23 2>&1'));

//$temperature = 0;
//$voltage = 0;
//$current = 0;
//var_dump(array("temp"=>$temperature, "voltage"=>$voltage, "current"=>$current));
//die();

echo json_encode(array("temp"=>$temperature, "voltage"=>$voltage, "current"=>$current));
?>
