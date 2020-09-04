<?php
include_once 'model/GreetingServices.php';

class GreetingController extends GreetingService
{
    function getMessage($firstname, $lastname)
    {
        echo $this->greetMessage($firstname, $lastname);
    }
    function storeMessageInRepository($firstName,$lastName)
    {
        $result = $this->addUsers($firstName,$lastName);
        echo "message saved in database <br>";
    }

    function findMessageByUserId($userID){
        $result = $this->getMessagesById(13);
        echo implode(' ',$result[0]);
    }

    function displayAllStoredMessages(){
        $this->getUsers();
    }

}

?>