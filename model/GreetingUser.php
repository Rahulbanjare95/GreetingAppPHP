<?php
include_once('repository/database.php');
class GreetingUser extends Database
{

    private $message;
    public $firstName;
    public $lastName;

    function greetMessage($firstName, $lastName)
    {
        if ($this->firstName = $firstName && $this->lastName = '') {
            $this->message = "hello " . $firstName;
            return $this->message;
        } elseif ($this->firstName = $firstName && $this->lastName = $lastName) {
            $this->message = "hello " . $firstName . " " . $lastName;
            return $this->message;
        } else {
            $this->message = "hello world!";
            return $this->message;
        }
    }
    protected function getUsers()
    {
        $sql = "SELECT * FROM users";
        $statment = $this->connect()->query($sql);
        while ($row = $statment->fetch()) {
            echo 'HI ' . $row['users_firstname'] . ' ' . $row['users_lastname'] . '<br>';
        }
    }

    protected function addUsers($firstName, $lastName)
    {
        $sql = "INSERT INTO users(users_firstname, users_lastname) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName]);
    }

    protected function getMessagesById($userID)
    {
        $sql = "SELECT * FROM users  WHERE users_id = ?";
        $statment = $this->connect()->prepare($sql);
        try {
            $statment->execute([$userID]);
            $result =  $statment->fetchAll();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    protected function updateUserInfo($firstName, $lastName, $userId)
    {
        $sql = "UPDATE users SET users_firstname = ?, users_lastname = ? WHERE users_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $userId]);
    }

    protected function deleteUser($userId)
    {
        $sql = "DELETE FROM users WHERE users_id =?";
        $stmt = $this->connect()->prepare($sql);
        try {
            $stmt->execute([$userId]);
        } catch (PDOException $exception) {
            $exception->getMessage();
        }
    }
}
