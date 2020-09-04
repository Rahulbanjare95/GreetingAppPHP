<?php
require_once("database.php");
require_once("GreetingController.php");
$db = new Database;
$greetingController = new GreetingController;
$greetingController->getMessage('Rahul','Banjare');
// if($_SERVER['REQUEST_METHOD'] == "GET"){
    
//     // $db->getAllUsers();
    

// } else if ($_SERVER['REQUEST_METHOD'] == "POST"){
//     echo "POST";
// } else {
//     http_response_code(405);
// }

?>