<?php
include_once 'model/GreetingUser.php';

class GreetingController extends GreetingUser
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

    function editUserById($firstname, $lastName, $userID){
        $this->updateUserInfo($firstname, $lastName, $userID);
        echo $this->displayAllStoredMessages();

    }

    function deleteMessageByID($userID){
        $this->deleteUser($userID);
        echo "After deletion <br>";
        $this->displayAllStoredMessages();
    }

}

?>