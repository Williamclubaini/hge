<?php 
spl_autoload_register(function($class) {

    if (!file_exists($class.'.php')) {
        exit(ERRCLASS.': '.$class);
    } else {
        require_once $class.'.php';
    }  
});
?>