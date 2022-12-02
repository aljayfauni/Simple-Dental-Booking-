<?php
include 'dbh.inc.php';

class Insert_class extends Database{

    public function __construct(){

        $this->db_connection();//call dbconnection from dbh connection file

    }

    

    public function insert_user($fname,$lname,$email,$phone,$service_type,$appt_date,$appt_time){

       

            $query="INSERT INTO tbl_appointments(fname,lname,email,phone,service_type,appt_date,appt_time,appt_status) values ('$fname','$lname','$email','$phone','$service_type','$appt_date','$appt_time','Pending')";
            $result=mysqli_query($this->connection,$query);
            return $result;
            
    
     
    }
}

?>