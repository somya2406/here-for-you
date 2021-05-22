<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $bloodgrp = $_POST['bloodgrp'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $address = $_POST['address'];
   
    $conn = new mysqli('localhost','root','','donors');
    if($conn->connect_error){
        die('Connection Failed :' .$conn->connect_error);

    }else{
        $stmt = $conn->prepare("insert into donors(fname,lname,bloodgrp,age,phone,email,state,district,city,address)values(?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssiisssss",$fname,$lname,$bloodgrp,$age,$phone,$email,$state,$district,$city,$address);
        $stmt->execute();
        echo "registration Successfull...";
        $stmt->close();
        $conn->close();
    }
?>  