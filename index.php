<?php

spl_autoload_register(function($class_name){

    include "classes/".$class_name.".php";

});


 

$user = New User;
$msg = $user->getMsg();

switch($msg){
    case 'email';
        $obj = New SendEmail;
        break;
    case 'sms';
       $obj = New SendSms;
       break;
    case 'fax';
       $obj = New SendFax;
       break;
}

echo $obj->notification();
?>