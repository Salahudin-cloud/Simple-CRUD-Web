<?php

require 'function.php'; 

//put data from database 
$getData = queryData("SELECT * FROM person"); 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            text-align : center; 
        }
        table{
            margin-left :auto ; 
            margin-right :auto; 
            border-collapse: collapse;
        }
        th{
            border:1px solid black;
            padding :5px; 
            border-collapse: collapse;
        }
        td{
            border-right : 1px solid black ;
            border-left : 1px solid black ;
            border-bottom : 1px solid black ;
            padding :5px; 
            border-collapse: collapse;
        }
        .btn{
            margin-top :10px; 
        }
        a{
            text-decoration:none;  
            color :black; 
        }
    </style>
    <title>List Contact </title>
</head>
<body>
    <h1 >List Contact : </h1>
    <table >
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Nomor </th>
            <th>Alamat </th>
            <th>Action</th>
        </tr>
        <?php foreach ($getData as  $row) : ?>
            <tr>   
                <td><?php echo $row['nama'] ; ?></td>
                <td><?php echo $row['jenis_kelamin']; ?></td>
                <td><?php echo $row['nomor']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td>
                    <button><a href="editData.php?id=<?php echo $row['id']; ?>">Edit</a></button> | 
                    <button><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></button> 
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <button class="btn">
        <a link href="newData.php">New Data
    </button>
</body>
</html>


