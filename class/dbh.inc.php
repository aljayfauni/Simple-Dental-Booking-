<?php
class Database{
private  $db_host;
private  $db_user;
private  $db_pass;

private  $db_name;

protected function db_connection(){

    $this->db_host="localhost";
    $this->db_user="root";
    $this->db_pass="";

    $this->db_name="crud2022";
 

    $this->connection= new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
    return $this->connection;

}

}

?>