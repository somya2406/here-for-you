<html>
    <head>
        <title>display records</title>
    <style>
        body{background-color:#caf0f8;
            margin:50px;
            text-align:center;
            }</style>
            </head>

<body>
    <h3>AVAILABLE DOCTORS</h3>
<center>
    <table border="2" >
        <tr>
            <th>Full name</th>
            <th>Specialization</th>
            <th>gender </th>
            <th> fee</th>
            <th>Mobile number</th>
            <th> Mail id</th>
            

<?php
// echo "in display."<br>";
// include_once('woc1.html');
error_reporting(0);
include("connection.php");
$query="select * from doctor_reg";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
//echo "$total";
$result = mysqli_fetch_assoc($data);

// echo $result['name']." ".$result['specialization']." ".$result['gender']." ".$result['fee']." ".$result['number']." ".$result['mail'];
if($total!=0)
{
    // $result=mysqli_fetch_assoc($data);
    while($result=mysqli_fetch_assoc($data))

    echo "<tr>
   
    <td>".$result['name']."</td>
    <td>".$result['specialization']."</td>
    <td>".$result['gender']."</td>
    <td>".$result['fee']."</td>
    <td>".$result['number']."</td>
    <td>".$result['mail']."</td>
     

     ";
}

?> 
</table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch data from database </title>
</head>
<body>
   
  
    
    <?php
      while($rows=mysql_fetch_assoc($result))
      {
          ?>
          <tr>
              <td><?php echo $rows['id'] ;?> </td>
              <td><?php echo $rows['name'] ;?> </td>
              <td><?php echo $rows['specialization'] ;?> </td>
              <td><?php echo $rows['gender'] ;?> </td>
              <td><?php echo $rows['fee'] ;?> </td>
              <td><?php echo $rows['number'] ;?> </td>
              <td><?php echo $rows['mail'] ;?> </td>
      </tr>
      <?php
      }
      ?>
      }
    
  </tbody>
</table>
   
</center>
</body>
</html>