<?php

$log_file = 'logs.txt';
$date = date('Y-m-d H:i:s');
$ip_address = $_SERVER['REMOTE_ADDR'];
$login_type = 'database';
$log_message = "$date - $ip_address - $username logged in using $login_type" . PHP_EOL;
file_put_contents($log_file, $log_message, FILE_APPEND);



/* 
$log_file = 'logs.txt';

$date = date('Y-m-d H:i:s');

$ip_address = $_SERVER['REMOTE_ADDR'];

$login_type = 'database'; 

// Create the log message
$log_message = "$date - $ip_address - $username logged in using $login_type" . PHP_EOL;

file_put_contents($log_file, $log_message, FILE_APPEND); */