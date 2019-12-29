<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer; //c

class Email{
    public function __construct(){ //c
        $email = new PHPMailer; //c
    }
    public function sendMail(){
        echo "E-mail enviado!";
    }
}