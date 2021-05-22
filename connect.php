<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body{background-color:#9bf6ff;
            margin:50px;
            text-align:center;
            }
            button{
                background-color:#abc4ff;

            }</style>
           

</head>
<body>
<?php
    $name = $_POST['fullname'];
    $specialization = $_POST['specialization'];
    $gender = $_POST['gender'];
    $fee = $_POST['fee'];
    $number = $_POST['number'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    // $address = $_POST['address'];
    // echo "Thank you";
    // <h3><form method="POST" action="display.php">
    //     <button>Take me to the list of degistered doctors</button>
    //     </form></h3>
    $conn = new mysqli('localhost','root','','doctor_details');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die('Connection Failed :'.$conn->connect_error);

    }else{
        $stmt = $conn->prepare("insert into doctor_reg(name,specialization,gender,fee,number,mail,password) values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssiiss",$name,$specialization,$gender,$fee,$number,$mail,$password);
        $execval = $stmt->execute();
        echo $execval;
        echo " 😊Thank you😊 ";
        echo " Registration Successfull...";

        // echo "in display"
if(isset($_POST['fullname']) && isset($_POST['specialization'])){
    echo $_POST['fullname']."<br>";
   "<br>";}
    
        $stmt->close();
        $conn->close();
    }
?>
<!-- if(isset($_POST['fullname']) && isset($_POST['specialization'])) -->
<form method="POST" action="display.php"><br><br>
<!-- <button type="button" class="btn btn-primary">Take me to the list of registered doctors</button> -->
        <button>Take me to the list of registered doctors</button>
         </form>
</body>
</html>
