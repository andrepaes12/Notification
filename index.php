<?php

require __DIR__.'/lib_ext/autoload.php';

//use PHPMailer\PHPMailer\PHPMailer; //c
use Notification\Email;             //b

//$email = new PHPMailer; //c

//var_dump ($email); //c

//$novoEmail = new Notification\Email\sendEmail(); //a
$novoEmail = new Email; //b

//var_dump ($novoEmail); //b,c

$novoEmail->sendMail(); //c