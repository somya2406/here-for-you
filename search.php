<!-- <!DOCTYPE html> -->
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search data in text box</title>
    <style>
        body{background-color:#e5989b;

        }
        input{
            width:40%;
            height:5%;
            border:1px;
            border-radius:5px;
            padding:8px 15px 8px 15px;
            margin:10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }</style>
</head>
<body>
    <center><h1>search by specialization</h1>
        <form action ="" method="POST">
            <input type="text" id="specialization"name="specialization" placeholder="Enter specialization to Search"><br><br>
            <input type="submit" name="search" value="Seach Data">


</form>
<?php 
$connection=mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'doctor_details');
 
if(isset($_POST['search'])){
    $specialization = $_POST['specialization'];

    $query="SELECT * FROM doctor_reg where specialization='$specialization' ";
    $query_run= mysqli_query($connection,$query);

    while($row=mysqli_fetch_array($query_run))
    {
        ?>
        <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/><br>
            <input type="text" name="fullname" value="<?php echo $row['fullname']?>"/>
            <input type="text" name="specialization" value="<?php echo $row['specialization']?>"/>
            <input type="text" name="gender" value="<?php echo $row['gender']?>"/>
            <input type="number" name="fee" value="<?php echo $row['fee']?>"/>
            <input type="number" name="number" value="<?php echo $row['number']?>"/>
            <input type="text" name="mail" value="<?php echo $row['mail']?>"/>

            
        <?php

    }
}
?>
</center>
</body>
</html>