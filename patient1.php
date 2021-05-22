<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <style>
             body{background-color:#c1d3fe;
                margin:50px;

}
        </style>
</head>
<body><h2><form action="" method="POST">
    Search by specialization 
    <label for="search" > search  </label>
    <input type="text" id="search" placeholder="Type for specialization" name="search">
</form>
</h2>
    <h2> <br><br>
 DO YOU WANT LIST OF DOCTORS AVAILABLE

    </h2>
    <form action="display.php" method="POST">
        <button name="submit" input type="submit"> click here!</button>
</form>
</body>
</html>