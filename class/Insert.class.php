<?php
include 'dbh.inc.php';

class Insert_class extends Database{

    public function __construct(){

        $this->db_connection();//call dbconnection from dbh connection file

    }

    

    public function insert_user($fnameDecrypted,$lnameDecrypted,$emailDecrypted,$phoneDecrypted,$service_typeDecrypted,$appt_dateDecrypted,$appt_timeDecrypted){

       

            $query="INSERT INTO tbl_appointments(fname,lname,email,phone,service_type,appt_date,appt_time,appt_status) values ('$fnameDecrypted','$lnameDecrypted','$emailDecrypted','$phoneDecrypted','$service_typeDecrypted','$appt_dateDecrypted','$appt_timeDecrypted','Pending')";
            $result=mysqli_query($this->connection,$query);
            return $result;
            
    
     
    }
}

?>