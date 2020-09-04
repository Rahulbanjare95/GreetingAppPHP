<?php
    class Database {
        private $user = "root";
        private $pwd = "";
        public $dsn; 
        protected function connect(){
            $this->dsn;
            try{
            $dsn  = 'mysql:host=127.0.0.1;port=3307; dbname=oophp16';
                $pdo = new PDO($dsn,$this->user, $this->pwd);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $pdo;
            }catch(PDOException $exception){
                echo $exception->getMessage();
            }
           
        }
    }
?>