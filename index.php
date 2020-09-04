<?php
require_once("database.php");
$db = new Database;
if($_SERVER['REQUEST_METHOD'] == "GET"){
    $db->getAllUsers();

} else if ($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "POST";
} else {
    http_response_code(405);
}

?>