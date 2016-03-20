<?php
//echo "Hi";
?>
<br /><br />
<?php
//var_dump($_GET['leftServo']);
//die();
var_dump(shell_exec('date'));
	if(is_numeric(trim($_POST['leftServo']))){
		var_dump(shell_exec('cd /var/www/servo_controller && sudo python servoCMD.py '.trim($_POST['leftServo']).' 2>&1'));
	} else{
                shell_exec('cd /var/www/servo_controller && sudo python servoCMD.py 0');
		echo "Under 1";
        }

	if(is_numeric(trim($_POST['rightServo']))){
		var_dump(shell_exec('cd /var/www/servo_controller && sudo python servoCMD2.py '.trim($_POST['rightServo']).' 2>&1'));
	} else{
		shell_exec('cd /var/www/servo_controller && sudo python servoCMD2.py 0');
		echo "Under 2";
	}
?>
