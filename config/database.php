<?php
    class Database {
        private $user = "root";
        private $pwd = "";
        public $dsn;
        private $conn;

        protected function connect(){
            $this->conn = null;
            try{ 
            $dsn  = 'mysql:host=127.0.0.1;port=3307; dbname=oophp16';
                $this->conn = new PDO($dsn,$this->user, $this->pwd);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $this->pdo;
            }catch(PDOException $exception){
                echo 'Connection Error:'.$exception->getMessage();
            }
        }
    }
    ?>