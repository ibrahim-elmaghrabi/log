<?php

function logger($log_type)
{
    if(!file_exists('../..log.text'))
    {
        file_put_contents('../..log.text', ',');
    }
    $ip = $_SERVER['REMOTE_ADDR'];
   // $time = data('m/d/y h:iA', time());
   
   $contents = file_get_contents('../../log.text');
   $contents .= "{$ip}, {$log_type}";
   file_put_contents('../../log.text', $contents);
}

