<?php
include_once 'model/GreetingServices.php';

class GreetingController extends GreetingService
{
    function getMessage($firstname, $lastname)
    {
        echo $this->greetMessage($firstname, $lastname);
    }
    function storeMessageInRepository($firstName,$lastName){
        $result = $this->addUsers($firstName,$lastName);
        echo "message saved in database'.'<br>';
    }
}
