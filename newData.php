<?php 

require 'function.php'; 
require 'connection.php'; 

if (isset($_POST['submit'])) {
    if( newData($_POST) > 0 ){
        echo "<script> 
                  alert(' data added successfully ');
                  location.href = 'index.php';
              </script>";
      }else{
        echo "<script> 
                  alert(' data failed to added ');
              </script>";
      }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Data</title>
    <style>
        body{
            text-align : center; 
        }
        a{
            text-decoration:none;  
            color :black; 
        }
        .container {
            margin: auto;
            width: 30%;
            border: 3px solid black;
            margin-top:10px; 
            padding : 10px; 
        }
    </style>
</head>
<body>
   
    
    <form action="" method="POST" class="container">
    <h1>New Contact</h1>
        <label for="name">Name :</label>
        <input type="text" id="name" name="name"><br><br>
        <label  for="gender">Gender : </label>
            <select id="gender" name="gender">
                <option selected value="gender" >Choose</option>    
                <option>Male </option>              
                <option>Female</option>          
            </select>
        <br><br>
        <label for="number">Number : </label>
        <input type="text" id="number" name="number"><br><br>
        <label for="address">Address : </label>
        <input type="text" id="address" name="address"><br><br>
        <button type="submit" name="submit">Add Data</button><br>
        <button><a href="index.php">Back</a></button> 
    </form>
</body>
</html>
