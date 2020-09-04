<?php
require_once("GreetingServices.php");

class GreetingController extends GreetingService {
    
    function getMessage($firstname,$lastname){
        echo $this->greetMessage($firstname,$lastname);
}
// $db = new Database;
// if($_SERVER['REQUEST_METHOD'] == "GET"){
//     $db->getAllUsers();

// } else if ($_SERVER['REQUEST_METHOD'] == "POST"){
//     echo "POST";
// } else {
//     http_response_code(405);
// }

}