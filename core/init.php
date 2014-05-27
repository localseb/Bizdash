<?php
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'user',
        'password' => '',
        'db' => 'bizdash'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expire' => 60480
    ),
    'session' => array(
        'session_name' => 'id'
    )
);

spl_autoload_register(function($class){
    require_once 'classes/' . $class . '.php';
});

require_once 'functions/sanitize.php';
?>