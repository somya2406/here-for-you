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
            margin:10px 0px 15 px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }</style>
</head>
<body>
    <center>
        <form action ="" method="POST">
            <input type="text" name="id" placeholder="Enter ID to Search"><br><br>
            <input type="submit" name="search" value="Seach Data">


</form>
<?php 
$connection=mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'doctor_details');
 
if(isset($_POST['search'])){
    $id = $_POST['id'];

    $query="SELECT * FROM employee where id='$id' ";
    $query_run= mysqli_query($connection,$query);

    while($rew=mysqli_fetch_array($query_run))
    {
        ?>
        <form action="" method="POST">
            <input type="text" name="id" />
            
        <?php

    }
}
?>
</center>
</body>
</html>