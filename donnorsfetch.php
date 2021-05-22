<html>
<head>
    <title> Search Donors Detail here</title>
    <style>
        body{
            background:url("fix.png");
            background size:100%;
            background position: 0px 0px;
        }
        input#button{
            background-color: black;
            border: none;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
           cursor: pointer;
            }
        input#state{
            font-size: 30px;
            padding: 10px 15px;
            text-align:center;
            
        }

    </style>
</head>
<body>
    <center>
        <h1>FIND DONOR HERE<h1>
        <form action="" method="POST">
        
           <input type="text" id="state" name ="state" placeholder="Enter your nearby states">
           <br><br>
        
        
           <input type="submit" id="button" name="search" value="search data" > 
        
        </form>
<?php
   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,'donors');

   if(isset($_POST['search']))
   {
       $state = $_POST['state'];

       $query = "SELECT * FROM donors where state='$state' ";
       $query_run = mysqli_query($connection,$query);

       while($row = mysqli_fetch_array($query_run))
       {
           ?>
              <form action="" method="POST">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/><br>
                  <input type="text" name="fname" value="<?php echo $row['fname'] ?>"/><br>
                  <input type="text" name="lname" value="<?php echo $row['lname'] ?>"/><br>
                  <input type="text" name="bloodgrp" value="<?php echo $row['bloodgrp'] ?>"/><br>
                  <input type="number" name="age" value="<?php echo $row['age'] ?>"/><br>
                  <input type="number" name="phone" value="<?php echo $row['phone'] ?>"/><br>
                  <input type="email" name="email" value="<?php echo $row['email'] ?>"/><br>
                  <input type="text" name="state" value="<?php echo $row['state'] ?>"/><br>
                  <input type="text" name="district" value="<?php echo $row['district'] ?>"/><br>
                  <input type="text" name="city" value="<?php echo $row['city'] ?>"/><br>
                  <input type="text" name="address" value="<?php echo $row['address'] ?>"/><br>
               </form>
            <?php
       }       
   }         
?>
    </center>
</body>
</html>