<?php

if (phpversion() > 7) {
	if(CONFIG['environment'] == 'development'){
		error_reporting(E_ALL);

	} elseif (CONFIG['environment'] == 'production') {
		error_reporting(0);

	} else {
		require('views/error/error_1.php');
	}
} else {
	
	echo "Your system is running an old version of PHP. The application requires at least PHP 8.0.0 or greater version.";
	exit();

}
?>