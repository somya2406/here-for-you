<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<title>
    Doctor registration
</title>

<head>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="woc1style.css">
</head>

<body>
    <div id="title">
        <h1 id="heading">Registration form for Doctors</h1>

    </div>
    <div>
        <nav id="whole">

            <h4>
                <form method="POST" action="connect.php">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" placeholder="Type your name" name="fullname"><br><br>
                    <label for="specialization">specialization</label>
                    <input type="text" id="specialization" placeholder="Type your specialization"
                        name="specialization"><br><br>
                    <!-- <label for="timings">Timings you at which you will be avalable</label><br> -->
                    <label for="gender">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="m">
                        <label class="form-check-label" for="gender">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="f" checked>
                        <label class="form-check-label" for="gender">
                            Female
                        </label>
                    </div>

                    <label for="fee">Consultation fee</label>
                    <input type="text" id="fee" name="fee"><br><br>
                    <label for="number">Mobile number</label>
                    <input type="text" id="number" placeholder="Type your number" name="number"><br><br>
                    <label for="mail">Mail id</label>
                    <input type="email" id="mail" placeholder="Type your mail id" name="mail"><br><br>
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Type your password" name="password"><br><br>
                    <div class="d-grid gap-2">
                        <!-- <button class="btn btn-primary" type="button">SUBMIT</button> -->
                        <!-- <a href="done.html">submit</a> -->
                        <button name="submit"input type="submit">Replace document </button>

                        <!-- <script>
                            function myFunction() {
                                location.replace()
                            }
                        </script> -->
                        <!-- <button class="btn btn-primary" type="button">Button</button> -->
                    </div>
                    <!-- <button type="button" class="btn btn-primary">SUBMIT</button> -->
                </form>
            </h4>

        </nav>
    </div>
</body>
</html>
<?php
// if($_POST['rollno']){
       if(isset($_POST['submit'])){

$rn=$_POST['name'];
$sp=$_POST['specialization'];
$gen=$_POST['gender'];
$fee=$_POST['fee'];
$num=$_POST['number'];
$em=$_POST['mail'];
$pwd=$_POST['password'];
if($rn!="" && $sp!="" &&$fee!="" &&$num!="" &&$em!="" &&$pwd!="" ){
    $query="INSERT INTO doctor_reg ('$rn','$sp','$gen','$fee','$num','$em','$pwd')";  
    $data=mysqli_query($conn,$query);
}
$mail = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $mailErr = "Invalid email format";
}
if($data){
    echo "data inserted";
}}
// $query="INSERT INTO doctor_reg ('$rn','$sp','$gen','$fee','$num','$em','$pwd')";
// echo  "$rn";

//echo "failed to insert";}
?>


 