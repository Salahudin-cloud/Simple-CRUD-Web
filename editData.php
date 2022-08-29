<?php 

require 'function.php'; 



//get id from index.php 
$id = $_GET['id']; 

//query data 
$getDataId = queryData("SELECT * FROM person WHERE id = $id"); 


//cek if button click 

if (isset($_POST['submit'])) {
    if( updateContact($_POST) > 0 ){
            echo "<script> 
            alert('data update successfully');
            location.href = 'index.php';
        </script>";
        }else{
        echo "<script> 
                alert(' data failed to update  ');
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
    <title>Edit</title>
    <style>
        .container {
            margin: auto;
            width: 30%;
            border: 3px solid black;
            margin-top:10px; 
        }
        h1{
            text-align : center; 
        }
        form {
            padding :10px;
        }
        a{
            text-decoration:none;  
            color :black; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Contact</h1>
        <form action="" method="POST" >
           <?php foreach($getDataId as $rowData) : ?>
                <input type="hidden" name="id" value="<?php echo $rowData['id'];?>">
                <label for="name">Name  :</label>
                <input type="text" id="name" name="name" value="<?php echo $rowData['nama']; ?>"><br><br>
                <label  for="gender">Gender : </label>
                <select id="gender" name="gender">
                    <option selected value="gender"><?php echo $rowData['jenis_kelamin']; ?></option>    
                    <option>Male </option>              
                    <option>Female</option>          
                </select>
                <br><br>
                <label for="number">Number :</label>
                <input type="text" id="number" name="number" value="<?php echo $rowData['nomor']; ?>"><br><br>
                <label for="address">Address :</label>
                <input type="text" id="address" name="address" value="<?php echo $rowData['alamat']; ?>"><br><br>
                <button type="submit" name="submit">
                    Update
                </button> 
                <button>
                    <a href="index.php">
                        Back 
                    </a>
                </button> 
           <?php endforeach; ?>
        </form> 
    </div>
    
</body>
</html>