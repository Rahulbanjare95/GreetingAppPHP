<?php
include_once('repository/database.php');
class GreetingService extends Database {

    private $message;
    public $firstName;
    public $lastName;

   function greetMessage($firstName, $lastName){
       if ( $this->firstName = $firstName && $this->lastName ='') {
            $this->message ="hello ".$firstName;
            return $this->message;
       }
       elseif ($this->firstName = $firstName && $this->lastName = $lastName){
            $this->message ="hello ".$firstName." ".$lastName;
            return $this->message;
       }else{
        $this->message ="hello world!";
        return $this->message;
       }
     }
       protected function getUsers($firstName)
       {
          $sql = "SELECT * FROM users  WHERE users_firstname = ?";
          $statment = $this->connect()->prepare($sql);
          $statment->execute([$firstName]);
          $result =  $statment->fetchAll();
          return $result;
       }
       
       protected function addUsers($firstName, $lastName)
    {
        $sql = "INSERT INTO users(users_firstname, users_lastname) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName]);
    }

    protected function getMessagesById($userID){
         $sql = "SELECT * FROM users  WHERE users_id = ?";
         $statment = $this->connect()->prepare($sql);
         $statment->execute([$userID]);
         $result =  $statment->fetchAll();
         return $result;

    }
}

?>