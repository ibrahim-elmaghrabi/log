<?php

use App\Users\User;
use App\Transactions\Transaction;
use App\Logs\Log;

require_once("vendor/autoload.php");


// $user = new User();
// $user->getUser();
// $t = new Transaction();
// $t->getTransaction();

//var_dump($this->logger());

include('app/Logs/log.php');
logger('database');

?>
