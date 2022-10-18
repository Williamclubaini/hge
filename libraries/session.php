<?php
session_start();
if (isset($_SESSION['user'])) {
    
    $users = $this->getData('users');
    $key = array_search($_SESSION['user'], array_column($users, 'email'));
    $USER = $users[$key];
    
}

?>