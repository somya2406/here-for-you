<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="doctor_details";
$conn =mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    // echo " connection ok";
}else{
    echo "connection failed";
}
?>