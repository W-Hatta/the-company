<?php

class Database{
    private $server_name = "localhost";
    private $user = "root";
    private $password = "";     // if using MAMP, password "root"
    private $db_name = "the_company";
    protected $conn;            //protected -- can be used by the class and Child classes

    public function __construct(){
        $this->conn = new mysqli($this->server_name, $this->user, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die("Error connecting to database ".$this->db_name.": ".$this->conn->connect_error);
        }
    }
}


?>