<?php
include_once 'controller/GreetingController.php';

$greetingController = new GreetingController;
$greetingController->getMessage('Rahul','Banjare');
echo "<br>";
$greetingController->findMessageByUserId(13);
echo "<br>";
$greetingController->displayAllStoredMessages();

echo "<br>";
$greetingController->editUserById("ricky","pointing",13);


?>