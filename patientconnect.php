<?php
    $pfname = $_POST['pfname'];
    $plname = $_POST['plname'];
    $afname = $_POST['afname'];
    $alname = $_POST['alname'];
    $relation = $_POST['relation'];
    $bloodgrp = $_POST['bloodgrp'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $address = $_POST['address'];
   
    $conn = new mysqli('localhost','root','','patientregistration');
    if($conn->connect_error){
        die('Connection Failed :' .$conn->connect_error);

    }else{
        $stmt = $conn->prepare("insert into patientregistration(pfname,plname,afname,alname,relation,bloodgrp,age,phone,email,state,district,city,address)values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssiisssss",$pfname,$plname,$afname,$alname,$relation,$bloodgrp,$age,$phone,$email,$state,$district,$city,$address);
        $stmt->execute();
        echo "registration Successfull...";
        $stmt->close();
        $conn->close();
    }
?>  