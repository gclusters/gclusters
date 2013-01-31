<?php

// sending a message to the admin

//phpinfo();

echo "testing the email PHP command...";

$to = 'm.castellani@gmail.com';
$subject = 'gclusters: user activity';
$message = '
Hello! Just a few lines to let you know that
someone has just added a link on gclusters. Please check it at http://gclusters.altervista.org/link_lt.php
The whole list of link are available anytime at http://gclusters.altervista.org/linksmain.php';
$message = wordwrap($message, 70);

mail($to, $subject, $message);

?>
