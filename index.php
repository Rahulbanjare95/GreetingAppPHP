<?php
include_once 'controller/GreetingController.php';

$greetingController = new GreetingController;
$greetingController->getMessage('Rahul','Banjare');
echo "<br>";
$greetingController->storeMessageInRepository('vinay','kumar');

?>