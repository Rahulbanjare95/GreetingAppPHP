<?php
class GreetingService {

    private $message;
    public $firstName;
    public $lastName;

   function greetMessage($firstName, $lastName){
       if ( $this->firstName = $firstName  ) {
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
}

?>